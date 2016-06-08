<?php
/**
 * @package     Vintage
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$user							= JFactory::getUser();
$enable_featured_module_button  = ($this -> params -> get('enable_featured_module_button', '0') != '0' ? false : true);
$featured_text_button           = $this -> params -> get('featured_text_button', 'Featured');
$template_style					= 'old';
$theme_style					= ($this->params->get('style', 'red-new'));

if (strpos($theme_style, '-new'))
{
	$template_style = 'new';
}

if (!is_null(JRequest::getVar('templateTheme', NULL)))
{
	$theme_style = JRequest::getVar('templateTheme');

	if (strpos($theme_style, '-new'))
	{
		$template_style = 'new';
	}
	else {
		$template_style = 'old';
	}
}
