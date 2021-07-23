
<?php

$count_current_post = 0;
$FIRST = 1;
$SECOND = 2;
$THIRD =3;
$FOUR =4;
$FIVE =5;

$args_destacada_secundaria = [
    'post_type' => 'post',
    'posts_per_page' => 5,
    'tag' => 'destacada'
];

$the_query = new WP_Query( $args_destacada_secundaria );

if( $the_query->have_posts() ) :

    while( $the_query->have_posts() ) :

        $the_query->the_post();

        $count_current_post += 1;

        if($count_current_post == $FIRST) {
            $first_post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'medium_large' );
            $first_title = get_the_title();
            $first_permalink = esc_url(get_the_permalink());
            $first_categories = get_the_category();
            $first_excerpt = get_the_excerpt();

            $GLOBALS['destacadas_id'][] = get_the_ID();
        }

        if($count_current_post == $SECOND) {
            $second_post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'medium' );
            $second_title = get_the_title();
            $second_permalink = esc_url(get_the_permalink());
            $second_categories = get_the_category();
            $second_excerpt = get_the_excerpt();

            $GLOBALS['destacadas_id'][] = get_the_ID();
        }
        if($count_current_post == $THIRD) {
            $third_post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'medium' );
            $third_title = get_the_title();
            $third_permalink = esc_url(get_the_permalink());
            $third_categories = get_the_category();
            $third_excerpt = get_the_excerpt();

            $GLOBALS['destacadas_id'][] = get_the_ID();
        }
        if($count_current_post == $FOUR) {
            $four_post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'medium' );
            $four_title = get_the_title();
            $four_permalink = esc_url(get_the_permalink());
            $four_categories = get_the_category();
            $four_excerpt = get_the_excerpt();

            $GLOBALS['destacadas_id'][] = get_the_ID();
        }
        if($count_current_post == $FIVE) {
            $five_post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'medium' );
            $five_title = get_the_title();
            $five_permalink = esc_url(get_the_permalink());
            $five_categories = get_the_category();
            $five_excerpt = get_the_excerpt();

            $GLOBALS['destacadas_id'][] = get_the_ID();
        }

    endwhile;
    wp_reset_postdata();
endif;
?>

<section class="dest">

    <article class="dest__card dest__card--screen-lg">


        <a href="<?= $first_permalink ?>">
            <div class="dest__card__image dest__card__image--screen-lg">
                <ul class="dest__card__tags tags">
                    <?php
                    if ( ! empty( $first_categories ) ) {
                        echo '<a class="tags" href="' . esc_url( get_category_link( $first_categories[0]->term_id ) ) . '">' . esc_html( $first_categories[0]->name ) . '</a>';
                    }
                    ?>
                </ul>
            <?= $first_post_thumbnail; ?>
            </div>
        </a>

        <div class="dest__card__content">
            <h2 class="dest__card__title dest__card__title--screen-lg"><a class="dest__card__title__link" href="<?= $first_permalink ?>" rel="bookmark"><?= $first_title; ?></a></h2>

            <p class="dest__card__description dest__card__description--screen-lg"><?= $first_excerpt; ?></p>
        </div>

    </article>

    <div class="dest__card">


            <article class="dest__card__image">
                <ul class="dest__card__tags tags">
                    <?php
                    if ( ! empty( $second_categories ) ) {
                        echo '<a class="tags" href="' . esc_url( get_category_link( $second_categories[0]->term_id ) ) . '">' . esc_html( $second_categories[0]->name ) . '</a>';
                    }
                    ?>
                </ul>
                <?= $second_post_thumbnail; ?>


            <div class="dest__card__content">

                <a href="<?= $second_permalink ?>">
                    <h2 class="dest__card__title"><a class="dest__card__title__link" href="<?= $second_permalink ?>" rel="bookmark"><?= $second_title; ?></a></h2>
                </a>

                <p class="dest__card__description"><?= $second_excerpt; ?></p>
            </div>
        </article>


            <article class="dest__card__image">
                <ul class="dest__card__tags">
                    <?php
                    if ( ! empty( $third_categories ) ) {
                        echo '<a class="tags" href="' . esc_url( get_category_link( $third_categories[0]->term_id ) ) . '">' . esc_html( $third_categories[0]->name ) . '</a>';
                    }
                    ?>
                </ul>
                <?= $third_post_thumbnail; ?>
                <div class="dest__card__content">

                    <a href="<?= $third_permalink ?>">
                    <h2 class="dest__card__title"><a class="dest__card__title__link" href="<?= $third_permalink ?>" rel="bookmark"><?= $third_title; ?></a></h2>
                    </a>
                    <p class="dest__card__description"><?= $third_excerpt; ?></p>
                </div>
            </article>
            </div>
            <div class="dest__card">
            <article class="dest__card__image">
                <ul class="dest__card__tags">
                    <?php
                    if ( ! empty( $four_categories ) ) {
                        echo '<a class="tags" href="' . esc_url( get_category_link( $four_categories[0]->term_id ) ) . '">' . esc_html( $four_categories[0]->name ) . '</a>';
                    }
                    ?>
                </ul>
                <?= $four_post_thumbnail; ?>
                <div class="dest__card__content">

                    <a href="<?= $four_permalink ?>">
                    <h2 class="dest__card__title"><a class="dest__card__title__link" href="<?= $four_permalink ?>" rel="bookmark"><?= $four_title; ?></a></h2>
                    </a>
                    <p class="dest__card__description"><?= $four_excerpt; ?></p>
                </div>
            </article>
            <article class="dest__card__image">
                <ul class="dest__card__tags">
                    <?php
                    if ( ! empty( $five_categories ) ) {
                        echo '<a class="tags" href="' . esc_url( get_category_link( $five_categories[0]->term_id ) ) . '">' . esc_html( $five_categories[0]->name ) . '</a>';
                    }
                    ?>
                </ul>
                <?= $five_post_thumbnail; ?>
                <div class="dest__card__content">

                    <a href="<?= $five_permalink ?>">
                    <h2 class="dest__card__title"><a class="dest__card__title__link" href="<?= $five_permalink ?>" rel="bookmark"><?= $five_title; ?></a></h2>
                    </a>
                    <p class="dest__card__description"><?= $five_excerpt; ?></p>
                </div>
            </article>

    </div>

</section>