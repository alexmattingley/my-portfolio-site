<?php get_header(); ?>
	</div>
	<div id="featured" class="clearfix flexslider">

		<ul class="slides">
			
			<?php

			$args = array(
				'post_type' => 'work'
			);

			$the_query = new WP_Query( $args );

			?>


			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li style="background-color: <?php the_field( 'background_color' ); ?>">
				<div class="container">
					<div class="grid_8"><img src="<?php the_field('homepage_slider_image'); ?>"></div>
					<div id="featured-info" class="grid_4 omega">
						<h5>Featured Project</h5>
						<h3 style="color: <?php the_field( 'button_color' ); ?>"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
						<p><?php the_field('description'); ?></p>
						<a class="btn blue" href="<?php the_permalink(); ?>" style="background-color: <?php the_field( 'button_color' ); ?>">View Project &rarr;</a>
					</div>
				</div>
			</li>	
			<?php endwhile; endif; ?>
		</ul>
	</div>
	<!-- <div class="container clearfix">
		<?php 
		$args = array (
			'post_type' => 'post',
			'category_name' => 'featured',
			'posts_per_page' => 1
		);
		$the_query = new WP_Query( $args );

		?>
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="grid_12 omega">
			<h5>Featured Post</h5>
		</div>
		<div class="push_2 grid_10 omega clearfix">
			<article>
					<?php get_template_part('content', 'post') ?>
			</article>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div> -->
	<div class="grid_12 omega clearfix fathead">
		<div class="grid_6">
			<article>
				<h5>Recent Post</h5>
				<?php 
				$args = array (
					'post_type' => 'post',
					'cat' => -5, //this is excluding category featured. Find this by going to wp backend, going to the category and checking the URL The ID in the Url is the correct value.
					'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );

				?>
				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				<?php get_template_part('content', 'post') ?>
				
				<?php endwhile; ?>
				<?php endif; ?>

			</article>
		</div>
			<?php

				$args = array(
					'post_type' => 'work',
					'posts_per_page' => 1
				);

				$the_query = new WP_Query( $args );

			?>


			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php get_template_part('content', 'work') ?>

			<?php endwhile; ?>

			<?php endif; ?>					
	</div>

		<div class="fathead group">
			<?php get_template_part('content', 'testimonials') ?>
		</div>

<?php get_footer(); ?>

