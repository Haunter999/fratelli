<!doctype html>
<!--[if lt IE 7 ]> <html lang="ru" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="ru" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ru" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ru" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title><?php echo $title;?></title>
<!--<link rel="shortcut icon" href="http://www.lookoround.ru/favicon.ico" />-->
<link type="text/css" href="/css/adstyle.css" rel="stylesheet" media="screen" />
<!--[if lte IE 9]>
  <script src="../script/html5_ie.js"></script>
<![endif]-->

</head>

<body>
<div id="container">

<div id="sub_header">
	<?php 
	if(isset($exit_link)) echo($exit_link);
	?>
</div>

<nav>
	<?php 
	if(isset($main_menu))
	{
		foreach($main_menu as $anchor=>$menu_desc) 
		{
			$attr=array('title' => $menu_desc);
			if(strstr($_SERVER["REQUEST_URI"], $anchor)) $attr['class']='now';
			echo HTML::anchor($anchor, $menu_desc, $attr), "\n"; 
			unset($attr);
		}
	}
	?>
</nav>

<?php echo($content); ?>

<div id="push">
</div>
</div>


<footer>
  <div id="support">
    &copy; Fratelli, 2012.
  </div>
</footer>

</body>
</html>