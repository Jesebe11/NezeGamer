<?php
	get_header();
?>

	<main id="primary" class="main">
		<div class="block-section">
			<section class="slider-cat">
				<?php
					get_template_part( 'template-parts/components/content/archive/slider-cat');
				?>
			</section>
			<?php get_template_part( 'template-parts/components/common/titles/titles' );?>
			<div class="block-section__split">
					<?php
						if ( is_category( 'noticias' ) ) {
							get_template_part( 'template-parts/content-archive', '  ',
							['class' => 'content-archive__list content-archive__list--news' ] );
						}elseif( is_category( 'juegos' ) ){
							get_template_part( 'template-parts/content-archive', '  ',
							['class' => 'content-archive__list content-archive__list--games' ] );
						}else {
							get_template_part( 'template-parts/content-archive' , '  ',
							['class' => 'content-archive__list content-archive__list--guides' ] );
						}
					?>
				<aside class="sidebar">
					<?php
						get_template_part( 'template-parts/components/common/sidebar/sidebar');
					?>
				</aside>
			</div>
		</div>
	</main>

<?php
	get_footer();