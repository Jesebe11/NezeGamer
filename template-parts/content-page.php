<div class="block-section">
        <?php
			get_template_part( 'template-parts/components/common/titles/titles' );
            if ( is_page( array( 'sobre-nosotros' , 'politica-de-privacidad' ) ) ) {
                get_template_part( 'template-parts/components/common/into-content/content', '  ',
                ['class' => 'about-us' ] );
            } elseif( is_page( 'contacto' ) ){
                get_template_part( 'template-parts/components/common/into-content/content', '  ',
                ['class' => 'contact' ] );
            }
            else {
                get_template_part( 'template-parts/components/common/into-content/content' , '  ',
                ['class' => 'content-general' ] );
            }

		?>
</div>