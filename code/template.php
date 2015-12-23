<?php
/**
 * @package     Vintage
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
	<head>
		<w:head />
	</head>
	<body class="<?php echo $wrightBodyClass ?>">
		<?php
			if ($this->countModules('toolbar'))
				:
		?>
		<!-- menu -->
		<w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
		<?php
			endif;
		?>
		<div class="<?php echo $wrightContainerClass; ?>">
			<!-- header -->
			<div class="header-bg-top"></div>
			<header id="header" class="content-wrapp">
				<div class="content-bg-repeat"></div>
				<div class="row-fluid">
					<w:logo name="top" />
				</div>
				<?php
					if ($enable_featured_module_button && $this->countModules('featured'))
						:
				?>
				<button type="button" class="btn pull-right btn-featured-collapse" data-toggle="collapse" data-target="#featured">
				     <?php echo $featured_text_button ?>
			    </button>
				<?php
					endif;
				?>
			</header>
			<div class="header-bg-bottom"></div>
			<?php
				if ($this->countModules('menu'))
					:
			?>
			<!-- menu -->
	   		<w:nav name="menu" wrapClass="navbar-inverse" />
			<?php
				endif;
			?>
			<!-- featured -->
			<?php
				if ($this->countModules('featured'))
					:
			?>
			<div id="featured" class=" <?php echo ($enable_featured_module_button) ?  'collapse' : ' hola' ; ?>">
				<div class="module_ms3">
					<div class="module-inner">
						<w:module type="none" name="featured" chrome="xhtml" />
					</div>
				</div>
			</div>
			<?php
				endif;
			?>

		</div>
		<div class="<?php echo $wrightContainerClass; ?>">
			<div class="content-bg-top"></div>
			<div class="content-wrapp">
				<div class="content-bg-repeat"></div>
				<!-- grid-top -->
				<?php
					if ($this->countModules('grid-top'))
						:
				?>
				<div id="grid-top">
					<w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" extradivs="module"/>
				</div>
				<?php
					endif;
				?>
				<?php
					if ($this->countModules('grid-top2'))
						:
				?>
				<!-- grid-top2 -->
				<div id="grid-top2">
					<w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" extradivs="module"/>
				</div>
				<?php
					endif;
				?>
				<div id="main-content" class="row-fluid">
					<!-- sidebar1 -->
					<aside id="sidebar1">
						<w:module name="sidebar1" chrome="xhtml" />
					</aside>
					<!-- main -->
					<section id="main">
						<?php
							if ($this->countModules('breadcrumbs'))
								:
						?>
						<!-- breadcrumbs -->
						<div id="breadcrumbs">
							<w:module type="none" name="breadcrumbs" chrome="xhtml" />
						</div>
						<?php
							endif;
						?>
						<?php
							if ($this->countModules('above-content'))
								:
						?>
						<!-- above-content -->
						<div id="above-content">
							<w:module type="none" name="above-content" chrome="xhtml" />
						</div>
						<?php
							endif;
						?>
						<!-- component -->
						<w:content />
						<?php
							if ($this->countModules('below-content'))
								:
						?>
						<!-- below-content -->
						<div id="below-content">
							<w:module type="none" name="below-content" chrome="xhtml" />
						</div>
						<?php
							endif;
						?>
					</section>
					<!-- sidebar2 -->
					<aside id="sidebar2">
						<w:module name="sidebar2" chrome="xhtml" />
					</aside>
				</div>
				<?php
					if ($this->countModules('grid-bottom'))
						:
				?>
				<!-- grid-bottom -->
				<div id="grid-bottom" >
						<w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" extradivs="module" />
				</div>
				<?php
					endif;
				?>
				<?php
					if ($this->countModules('grid-bottom2'))
						:
				?>
				<!-- grid-bottom2 -->
				<div id="grid-bottom2" >
						<w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" extradivs="module" />
				</div>
				<?php
					endif;
				?>

				<!-- footer -->
				<div class="wrapper-footer">
					<footer id="footer">
						<div class="footer-content">
					   		<?php
								if ($this->countModules('footer'))
								:
							?>
								<w:module type="row-fluid" name="footer" chrome="wrightflexgrid" extradivs="module" />
						 	<?php
								endif;
							?>
						</div>
						<?php
						if ($this->countModules('bottom-menu'))
						:
						?>
						<!-- bottom-menu -->
						<w:nav type="menu" wrapClass="row-fluid dropup" name="bottom-menu" />
						<?php
						endif;
						?>
				   </footer>
				</div>
			</div>
			<div class="content-bg-bottom"></div>
			<w:footer />
		</div>
	</body>
</html>
