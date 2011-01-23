<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	$headerstyle      = $this->params->get("headerstyle", "graphic");
	$headline     	  = $this->params->get("headline", "Family Detective");
	$slogan			  = $this->params->get("slogan", "Uncovering Your Family History");
	$cPanel		      = ($this->params->get("cPanel", 1)  == 0)?"false":"true";
	$cPanelheight     = $this->params->get("cPanelheight", "100"); 
	$cPanelSpeed      = $this->params->get("cPanelSpeed", "200");
	$cPanelText       = $this->params->get("cPanelText", "Bulletin");
	$user456suffix    = $this->params->get("user456suffix", "S5");
	$user789suffix	  = $this->params->get("user789suffix", "S4");
	
	
	function getColumns ($left, $right){
	if ($left && !$right) {$style = "-left-only";}
	if ($right && !$left) $style = "-right-only";
	if (!$left && !$right) $style = "-wide";
	if ($left && $right) $style = "-both";
	return $style;
	}
	$style = getColumns($this->countModules( 'left' ),$this->countModules( 'right' ));
	
	//count modules in vertical positions u456
	$showcasemodulecount = $this->countModules('user4') + $this->countModules('user5') + $this->countModules('user6');
	if ($showcasemodulecount == "1") {$showcasetdwidth = "100%";}
	elseif ($showcasemodulecount == "2") {$showcasetdwidth = "50%";}
	elseif($showcasemodulecount == "3") {$showcasetdwidth = "33%";}
	
	
	//count modules in vertical positions u789
	$footermodulecount = $this->countModules('user7') + $this->countModules('user8') + $this->countModules('user9');
	if ($footermodulecount == "1") {$footertdwidth = "100%";}
	elseif ($footermodulecount == "2") {$footertdwidth = "50%";}
	elseif($footermodulecount == "3") {$footertdwidth = "33%";}

?>
<link rel="shortcut icon" href="images/favicon.ico" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/nav.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]>
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/ie.css" rel="stylesheet" type="text/css" media="screen" />

<![endif]-->

<?php if ( ($cPanel == "true") and ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) ) : ?>
<?php
JHTML::_( 'behavior.mootools' );
?>
<script type="text/javascript">
			window.addEvent('domready', function() {
			//window.onload = function(){
			//select the button
			var button1 = $('button');
			var content1 = $('cPanel');
			var content2 = $('inside');
			//The height transition we attach to 'cPanel'
			var b1Toggle = new Fx.Style('cPanel', 'height',{duration: <?php echo $cPanelSpeed; ?>});
			//add an onclick event listener to button1
			button1.addEvent('click', function(){
			  //toggle height transition (hide-show)
			  if(content1.getStyle('height').toInt() > 0){
			    //hide
			  b1Toggle.start(0);
			  }else{
			    //show
			    b1Toggle.start(c1Height);
			  }
			  button1.toggleClass('button1_');
			  return false;
			});
			//set css display:block for the contentElements
			content1.setStyle('display','block');
			//get the scrollSize of the contentElements
			var c1Height = content1.getSize().scrollSize.y;
			});
	</script>
<?php endif; ?>
</head>

<body>
<div id="main-wrapper">		
	<div id="header_<?php echo $headerstyle; ?>">
		<div class="inside">
			<div id="headermod"><jdoc:include type="modules" name="newsflash" style="xhtml" /></div>
			<h1><a href="<?php echo JURI::base(); ?>" title="<?php echo $headline; ?>"><?php echo $headline; ?></a></h1>
			<h2><?php echo $slogan; ?></h2>	
			</div>
		</div>
		<div class="menubar">
			<div id="navmenu">
			<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/barmenu.js"></script>
				<jdoc:include type="modules" name="menu" style="none" />
				<?php if ( ($cPanel == "true") and ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) ) : ?>
				<ul id="cPanel_button">
					<li class="panel"><a id="button" class="button"><?php echo $cPanelText; ?></a></li>
				</ul>
				<?php endif; ?>
			</div>
		</div>
		<?php if($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
		<!-- BEGIN PULLDOWN CONTENT -->
			<div id="cPanel" style="display:none;">
			<div class="top"></div>
				<div style="height:<?php echo $cPanelheight;?>px;">
				<div class="inside">
				<table border="0" cellpadding="0" cellspacing="0" id="panel" align="center">
					  <tr>
						<?php if ($this->countModules( 'user1' )) : ?>
					    <td class="clm-a"><jdoc:include type="modules" name="user1" style="xhtml" /></td>
						<?php endif; ?>
						<?php if ($this->countModules( 'user2' )) : ?>
					    <td class="clm-b"><jdoc:include type="modules" name="user2" style="xhtml" /></td>
						<?php endif; ?>
						<?php if ($this->countModules( 'user3' )) : ?>
					    <td class="clm-c"><jdoc:include type="modules" name="user3" style="xhtml" /></td>
						<?php endif; ?>
					  </tr>
				</table>
				</div>
			</div>
		<!-- END PULLDOWN CONTENT -->
			<div class="bottom"></div>
		</div>
		<?php endif; ?>
		<div class="main-top"></div>
			<div id="mainbody">
		<?php if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
				<div id="showcase" style="margin-bottom: 18px;">
					<div class="module<?php echo $user456suffix; ?>">
						<div>
							<div>
								<div>
								<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
								<tr>
								<?php if ($this->countModules( 'user4' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user4" style="xhtml" />
								</td>
								<?php endif; ?>
								<?php if ($this->countModules( 'user5' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user5" style="xhtml" />
								</td>
								<?php endif; ?>
								<?php if ($this->countModules( 'user6' )) : ?>
								<td style="width: <?php echo $showcasetdwidth; ?>;padding:5px; vertical-align:top;">
								<jdoc:include type="modules" name="user6" style="xhtml" />
								</td>
								<?php endif; ?>
								</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($this->countModules( 'left' )) : ?>
			<div id="leftcol">
				<div class="left-inside">
					<jdoc:include type="modules" name="left" style="rounded" />
				</div>
			</div>
		<?php endif; ?>
		<?php if ($this->countModules( 'right' ) && JRequest::getCmd('task') != 'edit' ) : ?>
		
			<div id="rightcol">
				<div class="right-inside">
					<jdoc:include type="modules" name="right" style="rounded" />
				</div>
			</div>
		<?php endif; ?>
	
		<?php if ($this->countModules( 'banner' )) : ?>
		<div id="banner"><jdoc:include type="modules" name="banner" style="none" /></div>
		<?php endif; ?>
		<div class="main<?php echo $style; ?>">
			<?php if ($this->countModules( 'inset' )) : ?>
					<div id="inset">
					<jdoc:include type="modules" name="inset" style="rounded" />
					</div>
				<?php endif; ?>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				<td valign="top">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				</td>


				  </tr>



				</table>

				
			
				<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
			<div style="clear:both;"></div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
				<div id="bottom">
					<div class="module<?php echo $user789suffix; ?>">
						<div>
							<div>
								<div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
				<tr>
				<?php if ($this->countModules( 'user7' )) : ?>
				<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
				<jdoc:include type="modules" name="user7" style="xhtml" />
				</td>
				<?php endif; ?>
				<?php if ($this->countModules( 'user8' )) : ?>
				<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
				<jdoc:include type="modules" name="user8" style="xhtml" />
				</td>
				<?php endif; ?>
				<?php if ($this->countModules( 'user9' )) : ?>
				<td style="width: <?php echo $footertdwidth; ?>;padding:5px; vertical-align:top;">
				<jdoc:include type="modules" name="user9" style="xhtml" />
				</td>
				<?php endif; ?>
				</tr>
				</table>
					</div>
						</div>
							</div>
								</div>
									</div>
			<?php endif; ?>
							<div style="clear:both;"></div>
						</div>
					<div id="footer"><jdoc:include type="modules" name="footer" style="none" /></div>
				</div>
<div class="copyright"><?php require(YOURBASEPATH .DS."/js/template.css.php"); ?></div>
</body>
</html>