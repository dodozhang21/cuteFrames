<?php
/**
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inner">
		<div class="entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cute-frames' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2>
			</header>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'cuteFrames_status_avatar', '48' ) ); ?>
		</div><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cute-frames' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'cute-frames' ), __( '1 Thought', 'cute-frames' ), __( '% Thoughts', 'cute-frames' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'cute-frames' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
		</div><!-- .inner -->
	</article><!-- #post -->
