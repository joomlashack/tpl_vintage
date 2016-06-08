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

$enable_featured_module_button  = ($this -> params -> get('enable_featured_module_button', '0') != '0' ? false : true);
$featured_text_button           = $this -> params -> get('featured_text_button', 'Featured');

// Check if there is ?templateTheme=something exists in the URL
$template_preview = JFactory::getApplication()->input->get('templateTheme', null, 'string');

if($template_preview) :
    $template_style = $template_preview;
else:
    $template_style = $this -> params -> get('style', 'red-new');
endif;