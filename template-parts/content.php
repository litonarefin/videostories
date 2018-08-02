<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package VideoStories
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php videostories_post_format_content_thumbs();?>

	<div class="entry-content">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<?php videostories_entry_post_meta(); ?>
		<?php
		endif; ?>


		<p class="description">
			<?php echo esc_html( wp_trim_words( get_the_content(), 40, ' '  ) ); ?>
		</p><!-- /.description -->

		<?php videostories_read_more();?>

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				the_tags();
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'videostories' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>

	</div><!-- /.entry-content -->
</article><!-- /.post -->
