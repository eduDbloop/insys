<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo "<?xml version=\"1.0\"?>"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $mosConfig_sitename; ?></title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<script language="JavaScript" type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/seriousblue/js/netscaperesizefix.js"></script>
<link href="<?php echo $mosConfig_live_site;?>/templates/seriousblue/css/template_css.css" rel="stylesheet" type="text/css" />
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="content_container">
  <tr>
    <td><table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="content_table">
      <tr>
        <td height="300" valign="top"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>
            <td align="left" valign="middle">&nbsp;</td>
            <td width="350" height="79" align="right" valign="bottom"><?php mosLoadModules ( 'user3', -1); ?></td>
          </tr>
          <tr>
            <td height="20" colspan="2" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="40" align="right" valign="middle"><span class="body_outer">
                    <?php mosPathWay(); ?>
                  </span></td>
                  </tr>
              </table></td>
            </tr>
          <tr>
            <td align="center" valign="middle" style="font-size:28px; color:#006699;">

			<?php echo $mosConfig_sitename; ?>
			
			</td>
            <td align="right" valign="middle"><div id="topmodul">
              <?php
			  			if ( mosCountModules( 'top' ) ) {
			  				mosLoadModules ( 'top', -2 );
			  			} else {
			  				?>
              <span class="error">Top Module Empty</span>
              <?php
			  			}
			  			?>
            </div>              </td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td id="pathway_td" height="25" colspan="2" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td class="content_table_td"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0" >

          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td width="160" valign="top"><?php mosLoadModules ( 'left', -2 ); ?>
              <span style="padding-left:10px;"><?php mosLoadModules ( 'right', -2 ); ?>
              </span></td>
            <td valign="top" style="padding-top:7px; padding-left:20px;padding-right:0px;line-height:175%;text-align:justify;"><span class="body_outer">
              <?php mosMainBody(); ?>
            </span>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" valign="top" style="padding-right:10px;"><span class="body_outer"><span class="user1_inner">
                    <?php mosLoadModules ( 'user1', -2 ); ?>
                  </span></span></td>
                  <td width="50%" valign="top"><span class="body_outer"><span class="user1_inner">
                    <?php mosLoadModules ( 'user2', -2 ); ?>
                  </span></span></td>
                </tr>
              </table></td>
            </tr>
		  <tr height="10"><td></td></tr>
          <tr>
            <td colspan="2" align="center" valign="bottom" style="border-top:1px dotted #CCCCCC; font-size:9px;"><span class="user1_inner"><?php mosLoadModules ( 'bottom', -2 ); ?>
            </span><br />              
            <?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
			<!-- 	FOLGENDER LINK DARF NICHT ENTFERNT ODER MODIFIZIERT WERDEN !!!
					=================================================================			
					Ich stelle euch dieses Template kostenfrei zur Verfügung und als
					Gegenleistung erwarte ich, dass ihr einen Backlink setzt. Dieser ist hier verankert.				
					Gegen eine Gebühr könnt ihr den Link entfernen.
					
					Setzt euch dazu bitte mit mir in Verbindung:
					
					michael.salzmann@gmail.com
					
					Das Internet ist kein rechtsfreier Raum und anonym ist es inzwischen auch nicht mehr,
					also haltet euch bitte daran - in eurem eigenen Interesse!
								
					=================================================================
					DON'T MODIFY OR REMOVE FOLLOWING LINK !!!
					=================================================================

			-->
			
			<a href="http://www.funky-visions.de">Template Design by funky-visions.de</a>
			
			<!-- 	ENDE / END	--></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="35" class="content_table_bottom"><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<blockquote>
  <div align="center">
    <p><span class="body_outer">
      <?php mosLoadModules( 'banner', -1 ); ?>
        </span>
      <?php mosLoadModules( 'debug', -1 );?>
    </p>
    <p></p>
  </div>
</blockquote>
</body>
</html>