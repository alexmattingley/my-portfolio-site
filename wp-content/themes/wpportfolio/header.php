<!DOCTYPE html>
<html>
	<head>
		<title>
		<?php 
			wp_title( '-', true, 'right');
		?>
		</title>
		<?php wp_head(); ?>
	  	<script>
		  
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  
		  ga('create', 'UA-54160615-1', 'auto');
		  ga('send', 'pageview');

		</script>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body <?php body_class( $class ); ?>>

			<?php 
			$pagname = get_query_var('pagename');
			if ($pagename == 'resume') {
				?>
				<header>
				<div class="grid_12 omega none">
					<hgroup>
						<h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
						<ul class="header-contact">
							<li><a href="mailto:alexmattingley@gmail.com"><i class="fa fa-envelope"></i>alexmattingley@gmail.com</a></li>
							<li><a href="tel:(443) 538-0556"><i class="fa fa-phone"></i>(443) 538-0556</a></li>
							<li><a href="alexmattingley.com"><i class="fa fa-wifi"></i>alexmattingley.com</a></li>
						</ul>
					</hgroup>
				</div>
				<nav>
				    <ul>
						<li><a href="">Skills</a></li>
				    	<li><a href="">Projects</a></li>
				    	<li><a href="">Employment</a></li>
				     	<li><a href="">Education</a></li>
				    </ul>
				</nav>
			</header>
				<?php
			}
			 else {?>
			 <div class="container clearfix">
				<header>
				<div class="grid_12 omega none">
					<hgroup>
						<h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</hgroup>
				</div>
				<div class="grid_12 omega">
					<nav>
						<ul>
						<?php

							$args = array(
								'menu' => 'main-menu',
								'echo' => false
							);

							echo strip_tags(wp_nav_menu( $args ), '<li><a>');

						?>
						</ul>
					</nav>
				</div>
			</header>
	<?php } ?>		