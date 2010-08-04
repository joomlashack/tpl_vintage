<?php
/**
 * @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->code ?> - <?php echo $this->title; ?></title>
	<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/error.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body id="page_bg" style="background-image:none; margin-top:75px;">
	<div id="cPanel2">
	<div class="top"></div>
		<div>
		<div class="inside">
		
		<table border="0" cellpadding="0" cellspacing="0" id="panel" align="center">
			  <tr>
			    <td class="clm-a">
				<h3><?php echo $this->error->code ?> - <?php echo $this->error->message ?></h3>
				<p><strong><?php echo JText::_('You may not be able to visit this page because of:'); ?></strong></p>
					<ol>
						<li><?php echo JText::_('An out-of-date bookmark/favourite'); ?></li>
						<li><?php echo JText::_('A search engine that has an out-of-date listing for this site'); ?></li>
						<li><?php echo JText::_('A mis-typed address'); ?></li>
						<li><?php echo JText::_('You have no access to this page'); ?></li>
						<li><?php echo JText::_('The requested resource was not found'); ?></li>
						<li><?php echo JText::_('An error has occurred while processing your request.'); ?></li>
					</ol>
				<p><strong><?php echo JText::_('Please try one of the following pages:'); ?></strong></p>
				<p>
					<ul>
						<li><a href="index.php" title="<?php echo JText::_('Go to the home page'); ?>"><?php echo JText::_('Home Page'); ?></a></li>
					</ul>
				</p>
				<p><?php echo JText::_('If difficulties persist, please contact the system administrator of this site.'); ?></p>
				<div id="techinfo">
				<p><?php echo $this->error->message; ?></p>
				<p>
					<?php if($this->debug) :
						echo $this->renderBacktrace();
					endif; ?>
				</p>
			</td>
			  </tr>
		</table>
		</div>
	</div>
	<div class="bottom"></div>
</div>
</body>
</html>
