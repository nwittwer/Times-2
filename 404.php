<!DOCTYPE html>
<!-- THANKS TO http://line25.com/tutorials/create-a-tv-screen-404-page-with-clever-css-tricks -->

<html>
<head>
<meta charset="utf-8" />
<title>404 - Page Not Found</title>

<link href="<?php bloginfo('template_url'); ?>/css/404.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/scripts.js"></script>

</head>
<body>


<div id="tv">
 	<div id="content"> 		
		<a href="http://blog.spoongraphics.co.uk" id="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="The Page" /></a>		
 		<h1 class="scale1">404</h1>
 		<h2 class="scale2"><span>No signal</span> on this frequency</h2>
 		<p class="scale3">Go back home to <a href="<?php echo get_settings('home'); ?>">Las Lomas Page</a></p>
 	</div>
</div>


</body>
</html>