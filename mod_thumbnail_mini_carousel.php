<?php
/**
 * @copyright	Copyright © 2023 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	https://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$images	= $params->get("images");
$img = (array) $images ;
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_thumbnail_mini_carousel/assets/css/h-smart-thumbnail.css");
$doc->addScript(JURI::root()."modules/mod_thumbnail_mini_carousel/assets/js/h-smart-thumbnail.min.js");
require JModuleHelper::getLayoutPath('mod_thumbnail_mini_carousel', $params->get('layout', 'default'));
