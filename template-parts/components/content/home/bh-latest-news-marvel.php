<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'category_name' => 'marvel'
];

$the_query = new WP_Query( $args);

?>
<section class="news">
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $author = get_the_author();
            ?>
                <article class="content">
                    <div class="content-overlay"></div>
                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                        <div class="content__info">
                            <ul class="meta">
                                <li class="meta__item"> <?= $author; ?> </li>
                                <li class="meta__item"> <?php echo get_comments_number($post->ID); ?> </li>
                                <li class="meta__item">
                                    <?
                                        $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                        echo $post_tags[1]->name;
                                    }
                                    ?>
                                </li>
                            </ul>
                            <h2 class="content-title"><?= $title; ?></h2>
                        </div>
                        <div class="content-details fadeIn-bottom">
                            <div class="content-text">
                            <?  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                            <a href="<?php the_permalink(); ?>">
                                    <img src="https://i.postimg.cc/5NCrq5nk/eye-1.png" alt="Eye">
                                </a>
                            </div>
                        </div>
                </article>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>