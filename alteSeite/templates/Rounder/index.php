<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ( $my->id ) { initEditor(); } ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php mosShowHead(); ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template_css.css\" type=\"text/css\"/>" ; ?><?php echo "<link rel=\"shortcut icon\" href=\"$GLOBALS[mosConfig_live_site]/<?php echo $mosConfig_live_site;?>/templates/Rounder/images/favicon.ico\" />" ; ?>
</head>

<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td width="793" align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/logo.jpg" width="223" height="95"></td>
        <td background="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/top_bg.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td>&nbsp;</td>
            <td width="150"><form action="index.php" method="post">
              <div align="right">
                <input class="inputbox" type="text" name="searchword" size="15" value="<?php echo _SEARCH_BOX; ?>"  onBlur="if(this.value=='') this.value='<?php echo _SEARCH_BOX; ?>';" onFocus="if(this.value=='<?php echo _SEARCH_BOX; ?>') this.value='';" />
                <input type="hidden" name="option" value="search" />
              </div>
            </form></td>
          </tr>
        </table></td>
        <td width="27"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/top_bg_right.jpg" width="27" height="95"></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="6"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/left_bar.jpg" width="6" height="159"></td>
          <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><?php mosLoadModules ( 'user1' ); ?></td>
            </tr>
          </table></td>
          <td width="564" align="left" valign="top" bgcolor="#FFFFFF"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/main_banner.jpg" width="564" height="159"></td>
          <td width="6"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/right_bar.jpg" width="6" height="159"></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="top" background="<?php echo $mosConfig_live_site;?>/templates/rounder/images/body_bg.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="220">&nbsp;</td>
              <td><span class="pathway">
                <?php include "pathway.php"; ?>
              </span></td>
              <td width="6">&nbsp;</td>
            </tr>
          </table>
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="6"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/pixel.gif" width="6" height="10" /></td>
              <td width="217" align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="3">
                <tr>
                  <td><?php mosLoadModules ( 'left' ); ?></td>
                </tr>
              </table></td>
              <td align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="3">
                <tr>
                  <td><?php include ("mainbody.php"); ?>                   </td>
                </tr>
              </table></td>
              <td width="6"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/pixel.gif" width="6" height="10" /></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="25"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/round_02.jpg" width="25" height="25" /></td>
          <td background="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/bg_bottom01.jpg">&nbsp;</td>
          <td width="25"><img src="<?php echo $mosConfig_live_site;?>/templates/Rounder/images/round_01.jpg" width="25" height="25" /></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td width="210" align="right"><?php include_once('includes/footer.php'); ?> </td>
          <td align="center" valign="top"><?php

			if ( mosCountModules ('banner') ) {

				 mosLoadModules( 'banner', -1 ); }?></td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
