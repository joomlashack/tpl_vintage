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

$bg_image                       = $this -> params -> get('bg_image');
if( $bg_image ) {
    JFactory::getDocument()->addStyleDeclaration(
        '#header {background-image: url(' . JURI::base() . $bg_image . ');}'
    );
}

$enable_featured_module_button  = ($this -> params -> get('enable_featured_module_button', '0') != '0' ? false : true);
$featured_text_button           = $this -> params -> get('featured_text_button', 'Featured');
$template_style                 = $this -> params -> get('style', 'red');