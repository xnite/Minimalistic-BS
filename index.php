<?php get_header(); ?>

<div class="content">
	<?php
		while (have_posts()) : the_post();
			get_template_part( 'content', get_post_format() ); 
		endwhile; 
	?>
</div>
<?php wp_footer();?>
<?php get_footer(); ?>