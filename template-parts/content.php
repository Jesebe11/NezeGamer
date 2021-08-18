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
<?php nezegamer_post_thumbnail(  ); ?>
<div class="info">
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
		?>
				<ul class="entry-header__meta">
					<li class="entry-header__meta__date"><?php nezegamer_posted_on(); ?></li>
					<li class="entry-header__meta__author"><?php nezegamer_posted_by(); ?></li>
				</ul>

		<?php endif; ?>

		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-header__title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-header__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
	</header>
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