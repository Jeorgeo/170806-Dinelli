<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dinelli
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="cols col-6">
			<div class="blog-img">
				<?php the_post_thumbnail( 'full' )?>
			</div>
		</div>
		<div class="cols col-6">
			<div class="blog-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="blog-desc" >
				<?php the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dinelli' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div>
</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
