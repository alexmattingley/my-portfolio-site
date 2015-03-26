<?php get_header(); ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>

		<h3>there are no posts of pages to display</h3>

	<?php endif; ?>	
	
	</body> 
</html>
<html>