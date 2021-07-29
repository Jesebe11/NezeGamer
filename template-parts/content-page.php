<div class="block-section">
        <?php
			get_template_part( 'template-parts/components/common/titles/titles' );
            if ( is_page( array( 'sobre-nosotros' ) ) ) {
                get_template_part( 'template-parts/components/common/into-content/content', '  ',
                ['class' => 'About Us' ] );
            } else {
                get_template_part( 'template-parts/components/common/into-content/content' , '  ',
                ['class' => 'content' ] );
            }

		?>
</div>