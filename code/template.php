<?php
/**
 * @copyright Copyright (C) 2011 Joomlashack LLC. All rights reserved.
 */
// no direct access

// WrightTemplate class, for special
defined('_JEXEC') or die('Restricted access');

if (version_compare(JVERSION, '3.0', 'lt')) {
	JHTML::_('behavior.mootools');
}
else {
	JHtmlBehavior::framework($extras=true);
}

// WrightTemplate class, for special settings on Wright
class WrightTemplate extends WrightTemplateBase {
	public $suffixes = true;
}

$menutype = $this -> params -> get('menutype', 'accordion-open');
$disable_featured = ($this -> params -> get('disable-featured', '0') != '0' ? true : false);
$text = $this -> params -> get('text-button', 'Featured');

?>
<doctype>
	<html>
		<head>
			<w:head />
			<?php if (strpos($menutype,'accordion') !== FALSE): ?>
			<script language="javascript" type="text/javascript">
				var wrightAccordionHover = <?php echo ((strpos($menutype,'hover') === FALSE) ? "false" : "true"); ?>;
			</script>
			<script language="javascript" type="text/javascript" src="<?php echo $this->baseurl ?>/templates/js_vintage/js/accordion.open.js"></script>
			<?php endif; ?>
			<script language="javascript" type="text/javascript" src="<?php echo $this->baseurl ?>/templates/js_vintage/js/menu.js"></script>
			<?php if (!$disable_featured) : ?>
			<script language="javascript" type="text/javascript" src="<?php echo $this->baseurl ?>/templates/js_vintage/js/vintage.js"></script>
			<?php else: ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/js_vintage/css/vintage/nofeatured.css" type="text/css" />
			<?php endif; ?>
		</head>
		<body >
			<div class="total" id="total">
				<div class="logo">
					<div id="logogrid">
						<div class="logo-repeat">
							<div class="container_12 clearfix">
							<div class="grid_<?php echo $this->params->get('logowidth','2') ?>" id="logo">
								<w:logo style="none"/>
							</div>
							<?php if ($this->countModules('top')) :
							?>
							<div class="grid_<?php echo (12 - (int)$this->params->get('logowidth','2')) ?>" id="top">
								<div class="top">
									<div class="top-wrapper">
										<w:module type="single" name="top" chrome="xhtml" />
										<div class="clr"></div>
									</div>
								</div>
							</div>
							
							<?php    endif;?>
							</div>
						</div>
					</div>
					<div id="menu"<?php if ($this->countModules('featured')) : ?> class="featured"<?php endif; ?>>
						<w:module type="single" name="menu" chrome="xhtml" />
						<?php if (!$disable_featured) : ?>
						<div class="bulletin">
							<div class="bu-right" id="featured-button"><?php echo $text ?></div>
						</div>
						<?php endif; ?>
					</div>
					<div class="clear"></div>
				</div>
				<?php if ($this->countModules('featured')) :
				?>
				<div class="featured-wrapper container_12" id="featured-wrapper">
					
					<div class="featured1-wrapper ">
						<div class="pad-fe">
							<div class="pad2-fe"></div>
						</div>
						<div >
							<div class="featured2-wrapper ">
						<w:module type="grid" name="featured" chrome="wrightflexgridimages" />
							
						<div class="clr"></div>
						</div>

							
						</div>
						<div class="pad3-fe">
							<div class="pad4-fe"></div>
						</div>
					<div class="clear"></div>
					</div>
					
				</div>
				<?php    endif;?>

				<div class="content-wrapp">
					<div id="container">
						<div class="main-wrapper">
							<div class="main">
								<div class="content container_12 clearfix">
									<?php if ($this->countModules('grid-top')) :
									?>
									<div id="grid-top">
										<w:module type="grid" name="grid-top" chrome="wrightflexgridimages" />
										<div class="clearmargin"></div>
									</div>
									<?php    endif;?>
									<?php if ($this->countModules('grid-top2')) :
									?>
									<div id="grid-top2">
										<w:module type="grid" name="grid-top2" chrome="wrightflexgridimages" />
										<div class="clearmargin"></div>
									</div>
									<?php    endif;?>
									<section id="main">
										<div class="main-pad1">
											<div class="main-pad2">
												<div class="main-pad3">
													<?php if ($this->countModules('breadcrumbs')) :
													?>
													<div id="pathway" class="border">
														<div id="pathway-inner" class="inner-border">
															<w:module type="single" name="breadcrumbs" chrome="xhtml" />
															<div class="clear"></div>
														</div>
													</div>
													<div class="clear"></div>
													<?php    endif;?>

													<div class="cont-style">
														<w:content />
													</div>
													<div class="clr"></div>
													<div class="clearmargin"></div>
												</div>
											</div>
										</div>
									</section>
									<aside id="sidebar1">
										<w:module name="sidebar1" chrome="wrightgridimages" />
										<div class="clearmargin"></div>
									</aside>
									<aside id="sidebar2">
										<w:module name="sidebar2" chrome="wrightgridimages" />
										<div class="clearmargin"></div>
									</aside>
									<div class="clear"></div>
									<?php if ($this->countModules('grid-bottom')) :
									?>
									<div id="grid-bottom">
										<w:module type="grid" name="grid-bottom" chrome="wrightflexgridimages" />
										<div class="clearmargin"></div>
									</div>
									<?php    endif;?>
									<?php if ($this->countModules('grid-bottom2')) :
									?>
									<div id="grid-bottom2">
										<w:module type="grid" name="grid-bottom2" chrome="wrightflexgridimages" />
										<div class="clearmargin"></div>
									</div>
									<?php endif;?>
								</div>
								<div class="clear"></div>
								<div class="footer-wrapper">
									<div class="footer-int">
										<w:module type="single" name="footer" chrome="xhtml" />
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<w:footer />
				<div class="clear"></div>
			</div>
		</body>
</html>