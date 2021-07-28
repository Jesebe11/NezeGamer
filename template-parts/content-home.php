<div class="block-section">
    <?php
        get_template_part( 'template-parts/components/content/home/bh-destacado');
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Noticias</span> Marvel' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-latest-news-marvel');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Guias</span> Variadas' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-guides');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Part</span>idos' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-matches');
        /** Blocks */
        // get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Game</span>plays' , 'permalink' => '  '] );
        //         get_template_part( 'template-parts/components/content/home/bh-gameplays');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Wall</span>papers' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-galleries');
    ?>
</div>