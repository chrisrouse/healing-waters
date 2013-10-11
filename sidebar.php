<?php
/**
 * The tempate for rendering the sidebar. Will be on the left or the right of the of the screen depending
 * on the layout that the user has selected in the Dashboard.
 *
 * @package Standard
 * @since 	3.0
 * @version	3.0
 */
?>
<div id="sidebar" class="span4">
	<?php if ( ! dynamic_sidebar( 'sidebar-0' ) ) { ?>

				
	<?php } // end if ?>
</div><!-- /#sidebar -->
