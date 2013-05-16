<?php
/*------------------------------------------------------------------------
# JA Acrus 1.0 - Oct, 2006
# ------------------------------------------------------------------------
# Copyright (C) 2004-2006 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
-------------------------------------------------------------------------*/

defined( '_VALID_MOS' ) or die( 'Restricted access' );
$iso = split( '=', _ISO );
//echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';

# Define the template path ##########

$ja_template_path = $mosConfig_live_site.'/templates/ja_acrus';

if ( mosCountModules('left') ) {
  $divwidth = right1;
}
else {
	$divwidth = right2;
}


$user1 = mosCountModules("user1");
$user2 = mosCountModules("user2");

$div_u1;
$div_u2;

if ( $user1 && $user2 ) {
  $div_u1 = "width: 250px";
  $div_u2 = "width: 250px" ;
}

else if($user1 && !$user2)
{
  $div_u1 = "width: 540px;";
}

else if(!$user1 && $user2)
{
  $div_u2 = "width: 540px;";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo $ja_template_path;?>/css/template_css.css" rel="stylesheet" type="text/css" />

<?php
if ($width) { ?>
<link href="<?php echo $ja_template_path;?>/css/wide_layout.css" rel="alternate stylesheet" type="text/css" title="WideScreen" />
<?php } else { ?>
<link href="<?php echo $ja_template_path;?>/css/wide_layout.css" rel="stylesheet" type="text/css"/>
<?php }

if ( $my->id ) { initEditor(); } ?>

<script language="javascript" type="text/javascript" src="<?php echo $ja_template_path;?>/scripts/ja_script.js"></script>
</head>
<body id="bd">

	<!-- BEGIN: WRAPPER -->
<div id="ja-wrapper-outer">
	<div id="ja-wrapper">
		
		<!-- BEGIN: HEADER -->
		<div id="ja-header"><div class="clearfix"></div>
			<h1><a href="index.php"><img src="<?php echo $ja_template_path;?>/images/ja-logo-01.png" alt="<?php echo $mosConfig_fromname?>" /></a></h1>
			<div id="ja-search">
				<?php mosLoadModules('user4',-2); ?>
			</div>
		</div>
		<!-- END: HEADER -->
		
		<!-- BEGIN: TOPNAV -->
		<div id="ja-topnav" class="clearfix">
			<div id="ja-topnav-left">
			</div>
			<div id="ja-topnav-center">
				<?php mosLoadModules('top',-2); ?>
			</div>
			<div id="ja-topnav-right">
			</div>
		</div>
		<!-- END: TOPNAV -->
		
		<div  class=clearfix>
			<!-- BEGIN: LEFTCOL -->
			<?php if( mosCountModules('left') ) { ?>
			<div id="ja-leftcol" class="clearfix" style="<?php echo $div_left;?>">
				<div id="ja-leftcol-top">
				</div>
				<div id="ja-leftcol-center">				
					<?php mosLoadModules('left',-2); ?>	
					<?php mosLoadModules('user7',-2); ?>
				</div>
				<div id="ja-leftcol-bottom">
				</div>
			</div>
			<?php } ?>
			<!-- END: LEFTCOL -->

			<div id = "ja-wrapper-<?php echo $divwidth;?>" class="clearfix">
				<!-- BEGIN: NEWSFLASH -->
				<?php if ( mosCountModules('user9') ) { ?>
				<div id="ja-news-<?php echo $divwidth;?>">
					<div id="ja-newsflash-<?php echo $divwidth;?>">
						<?php mosLoadModules('user9',-2); ?>
					</div>
				</div>
				<?php } ?>
				<!-- END: NEWSFLASH -->
					
				<!-- BEGIN: PATHWAY -->
				<div id="ja-pathway">
					<?php mosPathway(); ?>
				</div>
				<!-- END: PATHWAY -->
				
				<!-- BEGIN: MAIN CONTENT -->
				<div id="ja-content">
					<?php mosMainBody(); ?>
					
					<!-- BEGIN: SPORTLIGHT -->
					<?php if ($user1 || $user2 ) {?>
					<div id="ja-wrapper-inner-<?php echo $divwidth;?>" class="clearfix">
						<div id="ja-wrapper-inner-top-<?php echo $divwidth;?>">
						</div>
						
						<div id="ja-wrapper-inner-center-<?php echo $divwidth;?>" class="clearfix">
							<!-- BEGIN: USER 1 -->
							<?php if( $user1 ) { ?>
							<div id="ja-lastest-right" style="<?php echo $div_u1;?>">
							<?php mosLoadModules('user1',-2); ?>
							</div>
							<?php } ?>
							<!-- END: USER 1 -->
						
							<!-- BEGIN: USER 2 -->
							<?php if( $user2 ) { ?>
							<div id="ja-popular-right" style="<?php echo $div_u2;?>">
							<?php mosLoadModules('user2',-2); ?>
							</div>
							<?php } ?>
							<!-- END: USER 2 -->
						</div>
						<div id="ja-wrapper-inner-bottom-<?php echo $divwidth;?>">
						</div>
					</div>
					<?php }?>
						<!-- END: SPORTLIGHT -->
            		
				</div>
				<!-- END: MAIN CONTENT -->
			</div>
			</div>
	<!-- BEGIN: FOOTER -->
	<div id="ja-footer" class="clearfix">										<!-- FOOTER -->
		<div id="ja-footer-left">
		</div>
		<div id="ja-footer-center">
						<div id="copyright">
				Wilhelm Steffen &amp; Sohn GmbH &amp; Co.KG&nbsp;&nbsp;-&nbsp; 
  Waldstra&szlig;e 114&nbsp;&nbsp;-&nbsp;&nbsp;32052 Herford&nbsp;&nbsp;-&nbsp; 
  Fon (05221) 97460&nbsp;&nbsp;-&nbsp;&nbsp;Fax (05221) 974613&nbsp;&nbsp;-&nbsp;&nbsp;<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#111;&#110;&#116;&#97;&#107;&#116;&#64;&#115;&#116;&#101;&#102;&#102;&#101;&#110;&#46;&#105;&#110;&#102;&#111;" style="font-size:11px; color:#8D8C90;">kontakt@steffen.info</a><?php mosLoadModules ( 'bottom'); ?>
			</div>
		</div>		
		<div id="ja-footer-right">
		</div>
	</div>
	<!-- END: FOOTER -->
	
</div>
</div>
<!-- END: WRAPPER -->

<?php mosLoadModules( 'debug', -1 );?>
</body>

</html>
