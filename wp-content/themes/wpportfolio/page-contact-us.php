<?php get_header(); ?>

<div class="grid_6 clearfix contact-form">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<hr>

	<?php endwhile; else: ?>

		<h3>there are no posts of pages to display</h3>

	<?php endif; ?>	
</div>
<div class="contact-page-image grid-6 clearfix">
	<img src="<?php the_field('featured_image'); ?>">
</div>

<?php get_template_part('content', 'testimonials') ?>

<?php get_footer(); ?>

