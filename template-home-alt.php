<?php
/**
 * Template Name: Home Page Alt
 *
 * The template for rendering pages without sidebars.
 *
 * @package Standard
 * @since 	3.0
 * @version	3.0
 */
?>
<?php get_header(); ?>
<?php $presentation_options = get_option( 'standard_theme_presentation_options' ); ?>

<div id="wrapper">
	<div class="container">
	  <?php echo do_shortcode( '[responsive_slider]' ); ?>
		<div class="row">

<?php if ( have_posts() ) { ?>
						<?php while ( have_posts() ) {
							 the_post(); ?>
							<div id="post-<?php the_ID(); ?> format-standard" <?php post_class( 'post' ); ?>>
								<!--
<div class="post-header clearfix">
									<h1 class="post-title entry-title"><?php the_title(); ?></h1>
								</div>
--> <!-- /.post-header -->
								<div id="content-<?php the_ID(); ?>" class="entry-content clearfix">
									<div class="content">
										<?php the_content(); ?>
									</div><!-- /.entry-content -->
								</div><!-- /.entry-content -->
							</div> <!-- /#post- -->
						<?php } // end while ?>
					<?php } // end if ?>
<div id="main" class="<?php echo 'full_width_layout' == $presentation_options['layout'] ? 'span12 fullwidth' : 'span8'; ?> clearfix" role="main">

				<?php if ( 'left_sidebar_layout' == $presentation_options['layout'] ) { ?>
					<?php get_sidebar(homepage); ?>
				<?php } // end if ?>


				<div id="latest-post">
					<!-- <div class="excerpt-page-title"><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></div> -->
					<?php
    					$args = array( 'numberposts' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', );
    					$postslist = get_posts( $args );
    					foreach ($postslist as $post) :  setup_postdata($post);
    				?>


                    <div class="home-excerpt">
                    <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                    <div class="post-header-meta">
                    <span class="the-time updated"><?php the_time('F j, Y'); ?></span><br /><br />
                    </div>

                    <?php the_excerpt(); ?>
                    <a class="btn" href="<?php the_permalink() ?>">Continue Reading &raquo;</a>
                </div>

                    <?php endforeach; ?>
                </div>
				</div><!-- /#main -->

				<?php if ( 'right_sidebar_layout' == $presentation_options['layout'] ) {  ?>
					<?php get_sidebar(homepage); ?>
				<?php } // end if ?>

		</div><!--/ row -->
	</div><!--/container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>