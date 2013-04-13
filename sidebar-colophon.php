<?php
/**
 * The colophon widgets area.
 *
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>
    <?php
        if (! is_active_sidebar('colophon-widget') ) return;
    ?>

    <div id="colophon-widget">

		
		<?php dynamic_sidebar('colophon-widget'); ?>


    </div><!-- end of #colophon-widget -->
