<?php
/**
 * The template for rendering the footer.
 *
 * @package Standard
 * @since 	3.1
 * @version	3.0
 */
?>

		<div id="footer" class="clearfix">

			<?php if( ! standard_is_offline() || is_user_logged_in() ) { ?>
				<?php if( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) { ?>
					<div id="footer-widgets" class="clearfix">
						<div class="container">
							<div class="row">

								<div id="left-footer-widgets" class="span4 clearfix">
									<?php dynamic_sidebar( 'sidebar-3' ); ?>
								</div><!-- /#left-footer-widget -->

								<div id="center-footer-widgets" class="span4 clearfix">
									<?php dynamic_sidebar( 'sidebar-4' ); ?>
								</div><!-- /#center-footer-widget -->

								<div id="right-footer-widgets" class="span4 clearfix">
									<?php dynamic_sidebar( 'sidebar-5' ); ?>
								</div><!-- /#right-footer-widget -->

							</div><!-- /row -->
						</div><!-- /container -->
					</div><!-- /#footer-widgets -->
				<?php } // end if ?>
			<?php } // end if ?>

			<div id="sub-floor" class="clearfix">
				<div class="container">
					<div class="row-fluid">
						<div class="span12">
							<div id="footer-links">
								<?php
									if( has_nav_menu( 'footer_menu' ) && ( ! standard_is_offline() || is_user_logged_in() ) ) {
										wp_nav_menu(
											array(
												'theme_location'  	=> 'footer_menu',
												'container_class' 	=> 'menu-footer-nav-container navbar',
												'items_wrap'      	=> '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
												'fallback_cb'		=> false,
												'depth'          	=> 1
											)
										);
									} // end if
								?>
							</div> <!-- footer-links -->
						</div> <!-- span12 -->
					</div> <!-- row-fluid -->
				</div>  <!-- container -->


							<?php $global_options = get_option( 'standard_theme_global_options' ); ?>
    				<div class="container">
    					<div class="row-fluid">
    						<div class="span12">
    							<div id="credit">
								<?php
									$designer_url = 'http://sarahannehayes.com/';
									$chrisrouse_url = 'http://www.create156.com/';
								?>

									<?php printf( __( '&copy; %1$s %2$s <br><small> Built by %4$s. <br>Designed by %3$s. </small>' ), date( 'Y' ), '<a href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a>', '<a href="' . $designer_url . '" target="_blank">Sarah Hayes</a>', '<a href="' . $chrisrouse_url . '" target="_blank">Chris Rouse</a>' ); ?>
							</div><!-- /#credits -->
						</div> <!-- span12 -->
						</div><!--/span12-->
					</div><!-- /row -->
				</div><!-- /.container -->
			</div><!-- /#sub-floor -->
		</div><!-- /#footer -->
		<?php wp_footer(); ?>
	</body>
</html>
























