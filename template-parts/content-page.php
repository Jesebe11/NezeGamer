<div class="block-section">
        <?php
			get_template_part( 'template-parts/components/common/titles/titles' );
            if ( is_page( array( 'sobre-nosotros' ) ) ) {
                get_template_part( 'template-parts/components/common/into-content/content', '  ',
                ['class' => 'contact-us' ] );
            } else {
                get_template_part( 'template-parts/components/common/into-content/content' , '  ',
                ['class' => 'content-general' ] );
            }

		?>
</div>