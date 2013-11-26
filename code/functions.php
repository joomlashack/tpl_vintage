<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Joomlashack / Meritage Assets
 * @author		Jeremy Wilken - Joomlashack
 * @package		Wright
 *
 * Use this file to add any PHP to the template before it is executed
 */
 
// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

if (version_compare(JVERSION, '3.0', 'lt')) {
	JHTML::_('behavior.mootools');
}
else {
	JHtmlBehavior::framework($extras=true);
}
JHtml::_('behavior.modal');


// WrightTemplate class, for special settings on Wright
class WrightTemplate extends WrightTemplateBase {
	public $suffixes = true;
}

$menutype = $this -> params -> get('menutype', 'accordion-open');
$disable_featured = ($this -> params -> get('disable-featured', '0') != '0' ? true : false);
$text = $this -> params -> get('text-button', 'Featured');
