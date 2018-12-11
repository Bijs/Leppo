<?php

use craft\contactform\events\SendEvent;
use craft\contactform\Mailer;
use yii\base\Event;

namespace Craft;

class RecaptchaPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();

        // luisteren naar de onbeforesend van de contact form
        craft()->on('contactForm.beforeSend', function(Event $event) {
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
                $event->isValid = true; // als is goed, stuur die naar de plugin
                return $event->isValid;
            }
            
            $event->isValid = false; // false returnen naar de plugin zodat die geen email verstuurd
            return $event->isValid;
        });
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Recaptcha');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Recaptcha validatie door gebruik te maken van de onBeforeSend van de contact form plugin');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return '???';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return '???';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Branko';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://cheapflyclub.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}