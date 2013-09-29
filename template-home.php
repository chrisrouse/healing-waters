<?php
/**
 * Template Name: Home (Full-Width Template)
 *
 * Home page template with slider, no sidebar, no comments.
 *
 * @package Standard
 * @since 	3.0
 * @version	3.1
 */
?>

<div id="wrapper">
	<div class="container">
	<?php get_header(); ?>
        <?php echo do_shortcode( '[responsive_slider]' ); ?>
		<div class="row">
			<div id="main" class="span12 clearfix" role="main">

				<?php get_template_part( 'breadcrumbs' ); ?>

				<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<div id="post-<?php the_ID(); ?> format-standard" <?php post_class( 'post' ); ?>>
							<div class="post-header clearfix">
								<h1 class="post-title entry-title"><?php the_title(); ?></h1>
							</div> <!-- /.post-header -->
							<div id="content-<?php the_ID(); ?>" class="entry-content">
								<?php the_content(); ?>
							</div><!-- /.entry-content -->
						</div> <!-- /#post --->

    						<?php if( is_active_sidebar( 'sidebar-7' ) || is_active_sidebar( 'sidebar-8' ) || is_active_sidebar( 'sidebar-9' ) ) { ?>
    	<div id="home-widgets" class="clearfix">
    			<div class="row">

    				<div id="left-home-widgets" class="span4 clearfix">
    					<?php dynamic_sidebar( 'sidebar-7' ); ?>
    				</div><!-- /#left-home-widget -->

    				<div id="center-home-widgets" class="span4 clearfix">
    					<?php dynamic_sidebar( 'sidebar-8' ); ?>
    				</div><!-- /#center-home-widget -->

    				<div id="right-home-widgets" class="span4 clearfix">
    					<?php dynamic_sidebar( 'sidebar-9' ); ?>
    				</div><!-- /#right-home-widget -->

    			</div><!-- /row -->
    					<?php get_footer(); ?>

    		</div><!-- /container -->
    	</div><!-- /#home-widgets -->
    <?php } // end if ?>

					<?php } // end while ?>
				<?php } // end if ?>
			</div><!-- /#main -->

		</div><!--/row -->
		  <?php get_footer(); ?>

	</div><!-- /container -->
</div> <!-- /#wrapper -->
