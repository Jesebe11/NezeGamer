<div class="block-section">
    <?php
        get_template_part( 'template-parts/components/content/home/bh-destacado');
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Ultimas</span>&nbsp noticias' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-latest-news');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Guias</span>&nbsp Variadas' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-guides');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Partidos</span>&nbsp y equipos' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-matches');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Game</span>plays' , 'permalink' => '  '] );
                get_template_part( 'template-parts/components/content/home/bh-gameplays');
        /** Blocks */
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Asombrosos</span>&nbspwallpapers' , 'permalink' => '  '] );
            get_template_part( 'template-parts/components/content/home/bh-galleries');
    ?>
</div>