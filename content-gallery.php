<?php
/**
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inner">
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'cuteFrames' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php cuteFrames_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
				// Get all images attached to the post
				$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1 ) );
				if ( $images ) :
					$total_images = count( $images );
					$image = array_shift( $images );
					$image_img_tag = wp_get_attachment_image( $image->ID, 'medium' );
				endif;
				// If there is a featured image, show that
				if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				elseif ( $images ) : ?>
				<div class="cuteFrames-post-thumbnail">
					<?php echo $image_img_tag; ?><div class="cuteFrames-post-thumbnail-inner"></div>
				</div><!-- .gallery-thumb -->
			<?php endif; ?>
			<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cuteFrames' ) ); ?>
			
			
			<?php the_excerpt(); ?>
			
			<?php if ( $images ) : ?>
			<p><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'cuteFrames' ),
					'href="' . get_permalink() . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'cuteFrames' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark"',
					number_format_i18n( $total_images )
				); ?></p>
			<?php endif; ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'cuteFrames' ) );
					if ( $categories_list && cuteFrames_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'cuteFrames' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'cuteFrames' ) );
					if ( $tags_list ) :
				?>
				<span class="sep"> | </span>
				<span class="tag-links">
					<?php printf( __( 'Tagged %1$s', 'cuteFrames' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
			<span class="sep"> | </span>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'cuteFrames' ), __( '1 Thought', 'cuteFrames' ), __( '% Thoughts', 'cuteFrames' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'cuteFrames' ), '<span class="edit-link">', '</span>' ); ?>

		</footer><!-- #entry-meta -->
		</div><!-- .inner -->
	</article><!-- #post -->
