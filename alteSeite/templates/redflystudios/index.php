<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php
if ($_REQUEST["option"] == "com_frontpage") {
    echo "<title>RedFlyStudios - Web Design Ireland</title>\n<meta name='description' content='RedFlyStudios is a website development company in Dublin,Ireland.We offer web design Ireland and Web Development Ireland to SMEs across Europe.We offer full service web site design and development' />\n<meta name='keywords' content='web design ireland,web site design ireland,web site development ireland,web development ireland,irish web design company' />\n<meta name='robots' content='index,follow' />\n<meta name='author' content='Redflystudios Web Design Ireland' />";
}
else {
mosShowHead();

}
?> 

<link rel="stylesheet" type="text/css" href="<?php echo $mosConfig_live_site; ?>/templates/redflystudios/css/template_css.css" />
<script src="templates/redflystudios/images/external.js" type="text/javascript"></script>
</head>
<body>

<script src="templates/redflystudios/images/fade.js" type="text/javascript"></script>
<noscript><div>Flash header</div></noscript>
	<div id="container">
    <div id="centered">
	<table border="0" cellpadding="0" cellspacing="0">
	  <tbody><tr>     
		<td valign="top">
		<img src="<?php echo $mosConfig_live_site;?>/templates/redflystudios/images/header.jpg" alt="RedFly Studios" style="display:block" /></script>
		</td>
	  </tr>
	  <tr>     
		<td valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/redflystudios/images/bot_00.gif" alt="web design Ireland" /></td>
	  </tr>
</tbody></table>
	<table style="width:770px;" cellpadding="0" cellspacing="0">
	<tbody><tr>     
	<td valign="top">
<!-- body -->
	  <table border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>  
          <td align="left" valign="top" class="text"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
            <tr>
              <td valign="top" style="width:575px;"><?php mosMainBody(); ?><br />
               </td>
              <td valign="top" style="width:20px;">&nbsp;</td>
              <td style="width:175px;" valign="top"><?php mosLoadModules ( 'left' ); ?><?php mosLoadModules ( 'right' ); ?>
<?php if ( $itemID === '19') { ?><?php mosLoadModules ( 'user8' ); ?><?php } ?>
<script src="templates/redflystudios/images/logo.js" type="text/javascript"></script></td>
            </tr>
          </table>            </td>
          </tr>
      </tbody></table>
	  <!-- footer -->
	  <table border="0" cellpadding="0" cellspacing="0" width="770">
		<tbody><tr>
		  <td valign="bottom" class="text" style="width: 575px; text-align:left"><?php mosLoadModules ( 'user3' ); ?></td>
			</tr>
		<tr>
		  <td class="comment" valign="top"><div style="text-align:center;"><img src="<?php echo $mosConfig_live_site;?>/templates/redflystudios/images/footer.gif" alt="web design Ireland" /><br />
<div id="copyright">
	<?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
	<br />
	<!-- Do not remove the following line -->
 Theme designed by Redflystudios <a href="http://www.redflystudios.com">Web Design</a>
	</div>
 <br />
	      <br />
		</div></td>
		</tr>
	  </tbody></table>
	</td>
	</tr>
</tbody></table>
</div>
</div>
</body></html>