<?php
require_once('wp_bootstrap_navwalker.php');

    register_sidebar(
		array(
			'name'=> 'Right Sidebar',
			'id' => 'Right Sidebar',
			'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>',
		)
	);
	register_nav_menu( 'primary', 'Primary' );
	
	function minimalisticBS_init() {
		$mytheme_inf_options=array(
			'type'				=> 'scroll',
			'footer_widgets'	=> false,
			'container'			=> 'content',
			'footer'			=> true,
			'wrapper'			=> false,
			'render'			=> false,
			'posts_per_page'	=> 15,
		);
		add_theme_support( 'infinite-scroll', $mytheme_inf_options );
	}
	add_action( 'init', 'minimalisticBS_init' );
?>