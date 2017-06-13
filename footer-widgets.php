<?php
/**
 * Displays footer widgets if assigned
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside >
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
