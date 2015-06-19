<?php
require_once('wp_bootstrap_navwalker.php');

    register_sidebar(
		array(
			'name'=> 'Right Sidebar',
			'id' => 'Right Sidebar',
			'before_widget' => '<div id="%1$s" class="sidebare-item widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>',
		)
	);
	wp_nav_menu(
		array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 3,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker()
		)
	);
?>