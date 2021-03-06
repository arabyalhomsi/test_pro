<?php
/**
 * The Sidebar that is normally displayed on the left side (Primary).
 *
 * @package Verbosa
 */
?>

<aside id="primary" class="widget-area sidey" role="complementary" <?php cryout_schema_microdata('sidebar');?>>
	<?php cryout_before_primary_widgets_hook(); ?>

	<?php if ( is_active_sidebar('widget-area-left') ) { 
				dynamic_sidebar( 'widget-area-left' );
	} ?>

	<?php cryout_after_primary_widgets_hook(); ?>
</aside>

