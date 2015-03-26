<div class="grid_6 spotlight project" style="background-color: <?php the_field( 'background_color' ); ?>">

		<a href="<?php the_permalink(); ?>">
			<img src="<?php the_field('homepage_slider_image'); ?>">
		</a>

		<h4>
			<a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
		</h4>

		<div class="height-container">
			<p><?php the_field( 'description' ); ?></p>
		</div>

		<p>
			<a class="btn blue" href="<?php the_permalink(); ?>" style="background-color: <?php the_field( 'button_color' ); ?>">
				View Project &rarr;
			</a>
		</p>

</div>