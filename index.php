<?php get_header(); ?>	

	<main role="main">
		<!-- section -->
<!-- Section categories -->
<?php if ( ((is_home()) && ($paged <= "1"))) { // Rcomendados slider?>
								
	<?php echo of_get_option('top_textarea', 'no entry' ); ?>							
 <?php } // fin recomendados slider ?>
	

		

		
		<!-- Section content -->
								<section>
									<header class="major">
										<h2><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>
									</header>
									<div class="posts">
										
										<?php get_template_part('loop'); ?>
										


										
									</div>
									<?php get_template_part('pagination'); ?>
								</section>

	</main>

							   



<?php get_footer(); ?>
