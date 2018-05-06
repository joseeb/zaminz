<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<section>
									<header class="major">
										<h2><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h2>
									</header>
									<div class="posts">
										
										<?php get_template_part('loop'); ?>
										


										
									</div>
									<?php get_template_part('pagination'); ?>
								</section>
		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
