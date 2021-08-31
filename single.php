<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NezeGamer
 */

get_header();
?>
	<main id="primary" class="main">
	<div class="block-section">
		<section class="block-section__split">
			<article class="article">
				<?php
					get_template_part( 'template-parts/content', 'single' );
				?>
			</article>
			<aside class="sidebar">
					<?php
						get_template_part( 'template-parts/components/common/sidebar/sidebar-archive');
					?>
			</aside>
		</section>
	</div>
	</main>
<?php
get_footer();