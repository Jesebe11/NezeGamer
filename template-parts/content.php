<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NezeGamer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="info">
	<?php nezegamer_post_thumbnail(  ); ?>
	<header class="entry-header">
	<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-header__title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-header__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
			<div class="entry-header__meta">
				<?php
				nezegamer_posted_on();
				nezegamer_posted_by();
				?>
			</div>
			<?php endif; ?>
		</header>

	</div>
<div class="excerpt">
<div class="entry-content">
		<?php
		the_excerpt(  );

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nezegamer' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php nezegamer_entry_footer(); ?>
	</footer>
</div>
</article>