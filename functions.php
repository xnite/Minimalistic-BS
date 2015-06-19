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
?>