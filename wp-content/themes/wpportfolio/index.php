<?php get_header(); ?>

<div class="grid_12 omega clearfix">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<hr>

	<?php endwhile; else: ?>

		<h3>there are no posts of pages to display</h3>

	<?php endif; ?>	
</div>

<?php get_template_part('content', 'testimonials') ?>

<?php get_footer(); ?>
