<?php get_header(); ?>

<div id="content" class="content text-center">
	<img src="<?php echo get_template_directory_uri(); ?>/img/dead-link.png" />
	<p>The page, post or file that you were looking for could not be found.<br />
	Try starting back at the <a href="/">Home page</a></p>
	<h2>Why is this happening?</h2>
	<p>You may have followed an old book mark, a search engine may not have crawled the page recently, or you mistyped the URL.<br />
	Alternatively, if all of the above does not apply then blame Ganondorf because he usually has something to do with things coming up missing.</p>
</div>
<?php wp_footer();?>
<?php get_footer(); ?>