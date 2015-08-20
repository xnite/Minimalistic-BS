<?php get_header(); ?>

<div class="content">
	<?php
		while (have_posts()) : the_post();
			get_template_part( 'content-page', get_post_format() ); 
		endwhile;
	?>
	<?php get_comments( $args ); ?>
</div>
<?php wp_footer();?>
<?php get_footer(); ?>
