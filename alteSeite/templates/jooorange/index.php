<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<?php
if ( $my->id ) {
	initEditor();
}

if ((mosCountModules( 'user1' )) && (mosCountModules( 'user2' ))) {
//if both modules are loaded, we need a 50%-layout for them
	$usera = 'user1';
	$userb = 'user2';
} else if ((mosCountModules( 'user1' )) || (mosCountModules( 'user2' ))) {
// if only one, then 100% no matter which one.
	$usera = 'user3';
	$userb = 'user3';
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/jooorange/css/template_css.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="allover">
	<div id="header1">
		<?php if (mosCountModules( "user3" )) { ?><?php mosLoadModules ( 'user3',-1); ?><?php } else {echo"&nbsp;";} ?>
	</div>
	<div id="header2">
		<div id="header2-inner-left" style="background-image: url(<?php echo $mosConfig_live_site; ?>/templates/jooorange/images/hg1.png)">&nbsp;</div>
		<!-- <div id="header2-text"><?php echo $GLOBALS['mosConfig_sitename']; ?></div> -->
	</div>
	<div id="navi">
			<a name="menu"></a>
			<?php
			if (mosCountModules( "left" )) {
				mosLoadModules ( 'left',-3);
			}
			?>
	</div>

<?php if (mosCountModules( "right" )) { ?>
	<div id="content_wright">
		<div id="content_modules">
			<?php
			if (mosCountModules( "user1" )) {?>
			<div id="<?php echo $usera; ?>">
			<?php mosLoadModules ( 'user1',-2); ?>
			</div><?php }
			if (mosCountModules( "user2" )) { ?>
			<div id="<?php echo $userb; ?>">
			<?php mosLoadModules ( 'user2',-2); ?>
			</div><?php } ?>
		<div class="clr"></div>
		</div>
		<div id="content_content">
		<a name="content"></a>
				<?php mosMainBody(); ?>
		</div>
	</div>
	<div id="right"><?php mosLoadModules ( 'right',-3); ?>
	</div>

<?php } else { ?>

	<div id="content">
		<a name="content"></a>
				<?php mosMainBody(); ?>
	</div><?php } ?>

	<div id="footer">
		Wilhelm Steffen &amp; Sohn GmbH &amp; Co.KG&nbsp;&nbsp;-&nbsp; 
  Waldstra&szlig;e 114&nbsp;&nbsp;-&nbsp;&nbsp;32052 Herford&nbsp;&nbsp;-&nbsp; 
  Fon (05221) 97460&nbsp;&nbsp;-&nbsp;&nbsp;Fax (05221) 974613&nbsp;&nbsp;-&nbsp;&nbsp;<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#111;&#110;&#116;&#97;&#107;&#116;&#64;&#115;&#116;&#101;&#102;&#102;&#101;&#110;&#46;&#105;&#110;&#102;&#111;" style="font-size:10px; color:#919999;">kontakt@steffen.info</a><?php mosLoadModules ( 'bottom'); ?>
		<?php mosLoadModules( 'debug', -1 );?>
	<!-- <div id="pathway">
		<?php mospathway() ?>
	</div> -->
		<div id="banner"><?php
			if (mosCountModules( "banner" )) {
				?>
				<div id="banner">
					<?php mosLoadModules ( 'banner',-1); ?>
				</div><br />

				<?php
			}
			?>
		</div>
	</div>
</div>
</body>
</html>