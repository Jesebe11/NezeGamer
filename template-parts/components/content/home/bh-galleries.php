<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'category_name' => 'wallpapers'
];
$the_query = new WP_Query( $args);

?>
<section class="galleries">
    <?php if( $the_query->have_posts() ) : ?>
                <?php while( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $title = get_the_title();
                ?>
                <article class="content content--galleries">
                        <div class="content-overlay"></div>
                        <?= get_the_post_thumbnail( $post->ID, 'medium-large', array('class' => 'content-image') ); ?>
                            <div class="content__info">
                                <h2 class="content-title"><?= $title; ?></h2>
                                <ul class="tags tags--gallery">
                                    <?
                                        $posttags = get_the_tags($post->ID , ' , ');
                                        if ($posttags) {
                                            foreach($posttags as $tag) {
                                            echo '<li>'.$tag->name . ' '. '</li>';
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="content-details fadeIn-bottom">
                                <div class="content-text">
                                <a class="zoom-gallery zoom-gallery--gallery" href="<?php the_permalink(); ?>">
                                        <img src="https://i.postimg.cc/yxbYLm0B/picture-1.png" alt="Eye">
                                    </a>
                                </div>
                            </div>
                    </article>



    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</section>