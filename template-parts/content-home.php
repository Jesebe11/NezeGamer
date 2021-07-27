<div class="block-section">
    <?php
        get_template_part( 'template-parts/components/content/home/bh-destacado');
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Noticias</span> Marvel' , 'permalink' => '  '] );
        get_template_part( 'template-parts/components/content/home/bh-latest-news-marvel' /** , '' , ['class' => 'marvel' ] */ );
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Guias</span> Variadas' , 'permalink' => '  '] );
        get_template_part( 'template-parts/components/content/home/bh-guides' /** , '' , ['class' => 'marvel' ] */ );
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Wall</span>papers' , 'permalink' => '  '] );
        get_template_part( 'template-parts/components/content/home/bh-galleries' /** , '' , ['class' => 'marvel' ] */ );

    ?>
</div>