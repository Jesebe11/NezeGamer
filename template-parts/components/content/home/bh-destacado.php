<?php
$args_destacados = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'noticias',
    'tag' => 'destacada'
);

$post_destacados = new WP_Query( $args_destacados );


?>
        <?php if( $post_destacados->have_posts() ) : ?>
                        <?php while( $post_destacados->have_posts() ) :
                                    $post_destacados->the_post();
                                    $title = get_the_title();
                                    $permalink = esc_url(get_the_permalink());
                                    $thumbnail = get_the_post_thumbnail();
                        ?>

                            <?= $title; ?>

                        <?php endwhile; ?>
            <?php endif; ?>