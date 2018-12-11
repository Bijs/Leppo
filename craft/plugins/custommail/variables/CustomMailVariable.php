<?php
/**
 * Custom mail plugin for Craft CMS
 *
 * Custom mail Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Branksz
 * @copyright Copyright (c) 2018 Branksz
 * @link      https://instagram.com/branksz
 * @package   CustomMail
 * @since     1
 */

namespace Craft;

class CustomMailVariable
{
    /**
     * Whatever you want to output to a Twig template can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.customMail.exampleVariable }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.customMail.exampleVariable(twigValue) }}
     */
    public function exampleVariable($optional = null)
    {
        return "And away we go to the Twig template...";
    }
}