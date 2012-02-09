<!doctype html>
<!--[if lt IE 7 ]> <html lang="ru" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="ru" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ru" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ru" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $meta_description;?>" />
<meta name="keywords" content="<?php echo $meta_keywords;?>" />
<meta name="author" content="Fratelli" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title><?php echo $title;?></title>
<!--<link rel="shortcut icon" href="http://www.lookoround.ru/favicon.ico" />-->
<link type="text/css" href="/css/style.css" rel="stylesheet" media="screen" />
<?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
<?php foreach($scripts as $file) { echo HTML::script($file, NULL, TRUE), "\n"; }?>
<!--[if lte IE 9]>
  <script src="../script/html5_ie.js"></script>
<![endif]-->

</head>

<body>
	<div id="container">
		<div id="canopy">
			<div id="logo">
				<a href="/" title="Ресторан Fratelli - На главную"><img src="/pics/fratelli.png" alt="Ресторан Fratelli" width="286" height="207" /></a>
			</div>
		</div>
		<nav>
			<?php 
			foreach($main_menu as $anchor=>$menu_desc) 
			{
				$attr=array('title' => $menu_desc);
				if(strstr($_SERVER["REQUEST_URI"], $anchor)) $attr['class']='now';
				echo HTML::anchor($anchor, $menu_desc, $attr), "\n"; 
				unset($attr);
			}
			?>
		</nav>
		<div id="content">
			<?php echo($content); ?>
		</div>

		<div id="push"> </div>
	</div>

	<footer>
	&copy; Fratelli &mdash; 2012
	</footer>

</body>
</html>