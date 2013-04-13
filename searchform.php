<?php
/**
 * The template for displaying search forms in cuteFrames
 *
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'cuteFrames' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'cuteFrames' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'cuteFrames' ); ?>" />
	</form>
