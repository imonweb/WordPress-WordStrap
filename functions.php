<?php 

require_once('wp-bootstrap-navwalker.php');

function theme_setup()
{
	// Featured Image Support
	add_theme_support('post-thumbnails');

	// Nav Menus
	register_nav_menus(array(
		'primary' 	=>	__('Primary Menu')
	));
}

add_action('after_setup_theme','theme_setup');

// Widget Locations
function init_widgets($id){
	register_sidebar(array(
			'name'	=>	'Sidebar',
			'id'	=>	'sidebar',
			'before_widget'	=>	'<div class="panel panel-default">',
			'after_widget'	=>	'</div></div>',
			'before_title'	=>	'<div class="panel-heading"><h3 class="panel-title">',
			'after_title'	=>	'</h3></div><div class="panel-body">'
		));
}

add_action('widgets_init', 'init_widgets');











// Excerpt Length

function set_excerpt_length() 
{
	return 35;
}

add_filter('excerpt_length', 'set_excerpt_length');

 






