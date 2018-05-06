<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail( 'home-thumb' ); ?></a>
		<h3><?php the_title(); ?></h3>
		<!-- post details -->
		<span class="date"><?php the_time('j \d\e F, Y'); ?> </span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		<ul class="actions">
		<li><a href="<?php the_permalink(); ?>" class="button"><?php _e( 'View Article', 'html5blank' ); ?></a></li>
		</ul>
	</article>


	

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
