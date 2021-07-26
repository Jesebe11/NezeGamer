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
                <article>
                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                        <div>
                            <ul>
                                <li> <?= $author; ?> </li>
                                <li> <?= $date; ?> </li>
                                <li> <?php echo get_comments_number($post->ID); ?> </li>
                            </ul>
                            <h2 class="content-title"><?= $title; ?></h2>
                            <p class="tags">
                                <?
                                    $post_tags = get_the_tags();
                                    if ( $post_tags ) {
                                    echo $post_tags[1]->name;
                                }
                                ?>
                            </p>
                        </div>
                </article>
                <?php endwhile;
            wp_reset_postdata();
        endif; ?>