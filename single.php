<?php get_header(); ?>

<div class="content">
	<?php
		while (have_posts()) : the_post();
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h1 class="post-title"><?php the_title(); ?></h1></a>
					<p class="meta-info">Posted on <?php the_time( 'm/d/Y' ); ?> by <?php the_author(); ?> <?php edit_post_link(); ?></p>
					<p class="post-body">
						<?php the_excerpt(); ?>
						<?php wp_link_pages(); ?>
					</p>
					<footer class="post-footer">

						<div id="comments">
							<?php comments_template(); ?>
						</div>
					</footer>
			</div>
		endwhile; 
	?>
</div>
<?php wp_footer();?>
<?php get_footer(); ?>