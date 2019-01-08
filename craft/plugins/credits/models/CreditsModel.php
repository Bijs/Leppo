<?php
/**
 * Credits plugin for Craft CMS
 *
 * Credits Model
 *
 * --snip--
 * Models are containers for data. Just about every time information is passed between services, controllers, and
 * templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 * --snip--
 *
 * @author    Branksz
 * @copyright Copyright (c) 2019 Branksz
 * @link      github.com/Leppo
 * @package   Credits
 * @since     1.0.0
 */

namespace Craft;

class CreditsModel extends BaseModel
{
    /**
     * Defines this model's attributes.
     *
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

}