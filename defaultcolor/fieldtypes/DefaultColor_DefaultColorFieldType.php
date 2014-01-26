<?php
/**
 * Color plugin for Craft CMS
 *
 * @package   Default Color
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2014
 * @link      https://github.com/marionnewlevant/craft-default-color
 * @license   MIT
 */
namespace Craft;

class DefaultColor_DefaultColorFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Default Color');
    }

    public function defineContentAttribute()
    {
        return array(AttributeType::String, 'column' => ColumnType::Char, 'length' => 7);
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->render('defaultcolor/defaultcolor/input', array(
            'name'  => $name,
            'value' => $value,
            'settings' => $this->getSettings()
        ));
    }

    protected function defineSettings()
    {
        return array('defaultColor' => array(AttributeType::String));
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('defaultcolor/defaultcolor/settings', array(
            'settings' => $this->getSettings()
        ));
    }

    public function prepSettings($settings)
    {
        // defaultColor must be blank or hex value. Set it to blank if it is not hex val
        $defaultColor = $settings['defaultColor'];
        if (!preg_match('/^#[0-9a-fA-F]{6}$/', $defaultColor))
        {
            $settings['defaultColor'] = '';
        }

        return $settings;
    }

    public function prepValueFromPost($value)
    {
        if ($value == '')
        {
            $value = $this->getSettings()->defaultColor;
        }

        return $value;
    }

}
