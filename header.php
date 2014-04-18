<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

		<!--====== LET THE FUN BEGIN ======-->		
		<!--=== SEO ===-->
		<title><?php if (is_home() ) { echo "Home | The Page"; } else { the_title('', ' | The Page'); } ?></title>
		<meta name="description" content="Las Lomas Student-run News" />
		<meta name="keywords" content="las lomas, las lomas page, llpage, ll, las lomas journalism, ll journo, ll journal, las lomas high school the page, high school journalism website" />
		<meta name="author" content="Las Lomas Page" />
		<meta name="copyright" content="Las Lomas Page. Copyright (c) 2013" />
		
		<!-- === Template Styles === -->
		<link href="<?php bloginfo('template_url'); ?>/css/typography.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/css/offcanvas.css" media="screen" rel="stylesheet" type="text/css" />
		
		<!-- Responsive Navigation -->
		<!-- Put these into the <head> -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive-nav.css">
		<script src="<?php bloginfo('template_url'); ?>/js/responsive-nav.js"></script>
		
		<!-- Foundation -->
		<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/css/foundation.css" media="screen" rel="stylesheet" type="text/css" />
		
		<link href="<?php bloginfo('template_url'); ?>/css/app.css" media="screen" rel="stylesheet" type="text/css" />
	
		<!--=== Apple Homescreen Icons ===-->
		<!-- 3rd Gen iPad -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144-precomposed.png">
		<!-- Retina iPhone -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114-precomposed.png">
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72-precomposed.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-precomposed.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/startup.png">
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		
		<!--[if lt IE 9]>
				<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		
			<!-- mobile meta (hooray!) -->
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		
  		<!-- jQuery -->
  		<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
 
		<?php
		if ( is_singular() && comments_open() && get_option('thread_comments') )
		  wp_enqueue_script( 'comment-reply' );
		?>
		
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- Google Analytics Here -->
		<?php if (!current_user_can('level_10')) { ?>
		
			<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-12492308-1']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
			</script>
		
		<?php } ?>
		<!-- end analytics -->

	</head>
	
	<body>


	<div class="off-canvas-wrap">
	  <div class="inner-wrap">
	  
	  <div id="navbar">
	    <nav class="tab-bar">
	      <section class="left-small">
	        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
	      </section>
	
	      <section class="middle tab-bar-section center">
	        <div>the Page</div>>
	      </section>
	
	      <section class="right-small">
	        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
	      </section>
	    </nav>
	
	    <aside class="left-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label><?php echo get_bloginfo('name'); ?></label></li>
	        <li><a href="<?php echo home_url(); ?>">Home</a></li>
	        <li><a href="<?php echo home_url(); ?>/category/top-stories/">Top Stories</a></li>
	        <li><a href="<?php echo home_url(); ?>/popular-page.php">Popular Posts</a></li>
	        <li>
	        	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	                <input type="text" value="" name="s" id="nav-bar-search" tabindex="1" />
	       		 </form>
	       	</li>
	      </ul>
	    </aside>
	
	
	    <aside class="right-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label>Account</label></li>
	        
	        
	        <?php if ( current_user_can('administrator') ) : ?>
	        	 <li><a href="<?php echo home_url()?>/wp-admin/">Dashboard</a></li>
	        	 <li><a href="<?php echo home_url()?>/wp-admin/post-new.php">New post</a></li>
	        	 <?php edit_post_link('Edit post', '<li>', '</li>'); ?>
	        	 <li><a href="<?php get_author_link( true, get_current_user_id() ); ?>">Your profile</a></li>
	        <?php  endif; ?>
	        <?php if(current_user_can('Subscriber')) : ?>
	            <li><a href="<?php get_author_link( true, get_current_user_id() ); ?>">Your profile</a></li>
	        <?php endif; ?>
	        <?php if ( !is_user_logged_in() ) : ?>
	           	<li><?php wp_loginout(); ?></li>
	        <?php endif; ?>
	      </ul>
	    </aside>
	
		 <div class="red-bar"></div>
		 
	</div>		
			
	    <section class="main-section">
	    
	    
	<!--=== Header and Nav ===-->
	<div id="header-bg"><!-- red bg -->
	
	<div class="row">
	  <div class="large-12 columns">

	  	<!-- Logo -->
	    <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="http://labs.halfbake.me/thepage/wp-content/themes/Times/img/logo.png"/><!--<?php bloginfo('name');?>--></a></h1>
	    <h6 class="logo"><?php bloginfo( 'description' ); ?> </h6>
	  </div>
	</div>

	</div>
	
	<!-- End Header -->

	

	<!-- Custom Message -->
	<?php if (get_option('nt_custom_message')) { ?>
		<div class="alert-box" style="text-align: center;">
		  <?php echo get_option('nt_custom_message'); ?>
		  <a href="" class="close">&times;</a>
		</div>
	<?php } elseif ((date('m') == 4) && (date('d') == 1)) { ?>
			<p>April Fools!</p>
	<?php } elseif ((date('m') == 12) && (date('d') == 25)) { ?>
			<p>Happy Holidays!</p>			
	<?php } else { ?>
	
	<?php } ?>
	