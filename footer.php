			
			
	  </div> <!-- end inner -->
	</div><!-- end Main -->
			<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form  action="<?php echo home_url(); ?>" role="search" method="get">
										<input type="text" type="submit" name="s" id="query" placeholder="Buscar" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									

									<?php wp_nav_menu(
                     array(
                       'theme_location'  => 'sidebar-menu',
                       'container_class' => 'collapse navbar-collapse',
                       'container_id'    => 'navbarNavDropdown',
                       'menu_class'      => 'navbar-nav',
                       'fallback_cb'     => '',
                       'menu_class'         => '',
                       'link_before'     => '<i class="fa fa-circle-o"></i> ',
                     
                       
                     )
                     );
                      ?>

									
								</nav>

							<!-- Section -->
								<section>
									<?php get_sidebar(); ?>
								</section>

							<!-- Section -->
								
							<!--section -->
								<section class="social">
									<ul class="icons">
										<li><a href="<?php echo of_get_option('twitterurl_text', '/#'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo of_get_option('facebookurl_text', '/#'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="<?php echo of_get_option('youtubeurl_text', '/#'); ?>" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
										
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.  Design By: <a href="https://ayuda.vip/members/joseeb.9/" title="Joseeb">Joseeb</a>.</p>
								</footer>

						</div>
					</div>
		</div>
		<!-- /wrapper -->
<!-- Footer -->
								
		<?php wp_footer(); ?>

	

	</body>
</html>
