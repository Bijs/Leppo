<?php
/**
 * Credits plugin for Craft CMS
 *
 * Credits Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Branksz
 * @copyright Copyright (c) 2019 Branksz
 * @link      github.com/Leppo
 * @package   Credits
 * @since     1.0.0
 */

namespace Craft;

class CreditsVariable
{
    /**
     * Whatever you want to output to a Twig template can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.credits.exampleVariable }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.credits.exampleVariable(twigValue) }}
     */
    public function exampleVariable($optional = null)
    {
        return "And away we go to the Twig template...";
    }
}