<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-1' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div id="secondary" class="widget-area sidebar-right widgetbox" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
	<?php endif; ?>

