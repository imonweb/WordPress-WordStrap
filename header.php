<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WordStrap</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		     <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'depth'             => 2,
		                'container'         => false,
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker())
		            );
        	?>

		       
		      <form class="navbar-form navbar-left">
		        
		      </form>
		       
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>