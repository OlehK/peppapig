<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	
	<div id="sidebar">
					<div id="sidebar-bgtop">
						<div id="sidebar-bgbtm">
							<ul>
								<li>
									<div id="search" >
										<form method="get" action="#">
											<div>
												<input type="text" name="s" id="search-text" value="" />
												<input type="submit" id="search-submit" value="GO" />
											</div>
										</form>
									</div>
									<div style="clear: both;">&nbsp;</div>
								</li>
								<li>
									<h2>Aliquam tempus</h2>
									<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
								</li>
								<li>
									<h2>Categories</h2>
									<ul>
										<li><a href="#">Aliquam libero</a></li>
										<li><a href="#">Consectetuer adipiscing elit</a></li>
										<li><a href="#">Metus aliquam pellentesque</a></li>
										<li><a href="#">Suspendisse iaculis mauris</a></li>
										<li><a href="#">Urnanet non molestie semper</a></li>
										<li><a href="#">Proin gravida orci porttitor</a></li>
									</ul>
								</li>
								<li>
									<h2>Blogroll</h2>
									<ul>
										<li><a href="#">Aliquam libero</a></li>
										<li><a href="#">Consectetuer adipiscing elit</a></li>
										<li><a href="#">Metus aliquam pellentesque</a></li>
										<li><a href="#">Suspendisse iaculis mauris</a></li>
										<li><a href="#">Urnanet non molestie semper</a></li>
										<li><a href="#">Proin gravida orci porttitor</a></li>
									</ul>
								</li>
								<li>
									<h2>Archives</h2>
									<ul>
										<li><a href="#">Aliquam libero</a></li>
										<li><a href="#">Consectetuer adipiscing elit</a></li>
										<li><a href="#">Metus aliquam pellentesque</a></li>
										<li><a href="#">Suspendisse iaculis mauris</a></li>
										<li><a href="#">Urnanet non molestie semper</a></li>
										<li><a href="#">Proin gravida orci porttitor</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	

<?php endif; ?>
