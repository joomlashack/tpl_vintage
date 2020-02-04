<?php
/**
 * @package     Wright
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Access template parameters
$document = JFactory::getDocument();

// Don't modify this file!
// Set your variables overrides for variables-something.less.
// These variables overrides are defined on templateDetails.xml below 'style' field
$lessCustomizationVars = array (
    '@color_one'    => $document->params->get('color_one', '#9c0000'),
    '@color_two'    => $document->params->get('color_two', '#E3DAA1'),
    '@color_three'  => $document->params->get('color_three', '#20282A')
);

// Check the selected variation style to choose between 'red-new' (default style) or 'red'
if($document->params->get('styleVariation', 'modern') == 'modern') {
    $baseStyle = 'red-new';
}
else
{
    $baseStyle = 'red';
}

// Run the compiler
require_once dirname(__FILE__) . '/../wright/build/less/compiler.php';
$build = new WrightLessCompiler;
$build->start($baseStyle, $lessCustomizationVars);