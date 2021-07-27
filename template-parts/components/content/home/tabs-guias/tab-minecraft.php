<?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'category_name' => 'minecraft-guias',
    ];
    $the_query_ = new WP_Query( $args);
?>

<?php if( $the_query_->have_posts() ) : ?>
    <?php while( $the_query_->have_posts() ) :
        $the_query_->the_post();
        $title = get_the_title();
        $author = get_the_author();
        $date = get_the_date();
    ?>
        <article class="item">
            <div class="item__meta">
                <img src="https://i.postimg.cc/t4KSmPcp/guide.png" alt="Guia">
                    <p class="item__meta__tags">
                        <?= $date; ?>
                    </p>/
                    <ul class="item__meta__tags">
                        <?
                            $post_tags = get_the_tags();
                            if ( $post_tags ) {
                            echo $post_tags[0]->name;
                            }
                        ?>
                    </ul>
            </div>
            <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
            <a href="<?php the_permalink(  ); ?>">
                <h2 class="item__title"><?= $title; ?></h2>
            </a>
        </article>
    <?php endwhile;
    wp_reset_postdata();
endif; ?>