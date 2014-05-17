<?php
/**
 * Color plugin for Craft CMS
 *
 * @package   Default Color
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2014
 * @link      https://github.com/marionnewlevant/craft-defaultcolor
 * @license   MIT
 */
namespace Craft;

class DefaultColorPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Default Color');
    }

    function getVersion()
    {
        return '0.3';
    }

    function getDeveloper()
    {
        return 'Marion Newlevant';
    }

    function getDeveloperUrl()
    {
        return 'http://marion.newlevant.com';
    }
}
