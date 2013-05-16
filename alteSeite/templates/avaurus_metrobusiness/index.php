<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>avaurus.com 's Metrobusiness</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="robots" content="index,follow" />
		<meta name="author" content="Andreas Schipplock" />
		<meta name="publisher" content="Andreas Schipplock" />
		<?php mosShowHead(); ?>
		<link href="<?php echo $mosConfig_live_site;?>/templates/avaurus_metrobusiness/css/template_css.css" rel="stylesheet" type="text/css" />
		<link href="css/template_css.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
		<title><?php echo $mosConfig_sitename; ?></title>
</head>
<body>
<div id="wrap">
	<div id="wrap_top"></div>
	<div id="main">
	
		<div id="head">
			<ul class="navbar">
				<li><?php mosPathWay(); ?></li>
			</ul>
			<h1 class="title"><?php echo $mosConfig_sitename; ?></h1>
		</div>
			
		<div id="content">
			<div class="entry">
				<?php mosMainBody(); ?>	
				<?php
					if ($my->id) {
						include ("editor/editor.php");
						initEditor();
					}
				?>
			</div>

		</div>
		
		<div id="rightbar">
			
			<?php mosLoadModules ( 'left', -2 ); ?>
            <?php mosLoadModules ( 'right', -3 ); ?>
			
		</div>
		
		<div id="footer">
			&copy; Name | Design by <a href="http://avaurus.com">avaurus.com</a>
		</div>
	</div>
</div>
</body>
</html>
