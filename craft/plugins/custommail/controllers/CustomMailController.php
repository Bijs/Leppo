<?php
/**
 * Custom mail plugin for Craft CMS
 *
 * CustomMail Controller
 *
 * --snip--
 * Generally speaking, controllers are the middlemen between the front end of the CP/website and your plugin’s
 * services. They contain action methods which handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering post data, saving it on a model,
 * passing the model off to a service, and then responding to the request appropriately depending on the service
 * method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what the method does (for example,
 * actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 * --snip--
 *
 * @author    Branksz
 * @copyright Copyright (c) 2018 Branksz
 * @link      https://instagram.com/branksz
 * @package   CustomMail
 * @since     1
 */

namespace Craft;

class CustomMailController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = true;

    // stuur mail
    public function actionsend()
    {
        $this->requirePostRequest();

        // post data in var stoppen
        $post = craft()->request->getPost();

        // uitlezen captcha response uit de post
        $captcha = '';
        if ($_POST['g-recaptcha-response']) {
            $captcha = $_POST['g-recaptcha-response'];
        }

        // secret key ophalen uit settings
        $secretKey = craft()->config->get('recaptcha')['secretKey'];

        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

        if ($response['success'] == true)
        {
            // data uitlezen
            $naam = $post['sendName'];
            $fromMail = $post['sendMail'];
            $bericht = $post['sendMessage'];

            $email = new EmailModel();
            $emailSettings = craft()->email->getSettings();

            $email->fromEmail = craft()->systemSettings->getSetting('email', 'emailAddress');

            $email->toEmail = $email->fromEmail;
            $email->subject = "Contact form BojanGurbaj.com";

            $email->replyTo = $fromMail;

            // template in email laden
            $email->htmlBody = "Naam: " . $naam . "<br><br>Email: " . $fromMail . "<br><br>Bericht: " . $bericht;

            // verstuur de email
            craft()->email->sendEmail($email);

            $this->returnJson(array('success' => true));
            return true;
        }
        
        $this->returnJson(array('success' => false));
        return false;
    }
}