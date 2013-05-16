<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>

<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site;?>/templates/red_evolution_thirty_three/css/template_css.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<div align="center">
   <div id="wrapper" align="center">
      <div id="wrapper_inner">

         <div id="container">
            <div id="container_inner">

               <div id="header">
               </div>

               <div id="content">
                  <div id="content_inner">
                     <div id="content_bg">

                        <div id="left_menu">
                        <?php mosLoadModules ( 'left', -2 ); ?>
                        </div>

                        <div id="main_container">
                           <div id="content_header">
                           </div>
                           <div id="main_content">         
                           <?php mosMainBody(); ?>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>

            </div>
         </div>      

      </div>
   </div>
</div>

<div class="clr"></div>

<div align="center">
   <div id="footer">
      <?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
      <?php mosLoadModules( 'debug', -1 );?>
      Designed by <a href="http://www.redevolution.com" target="_blank" title="red_evolution">Red Evolution</a>
   </div>
</div>

<div id="footer_block">
</div>

</body>
</html>