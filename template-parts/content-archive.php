<section class="<?= $args['class']; ?>">
    <?php if ( have_posts() ) : ?>
    <?php

    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    endif;
    ?>
        <?php nezegamer_numeric_posts_nav(); ?>
</section>