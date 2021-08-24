<?php

class Recent_galeries extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_recent_galeries',
            'description' => 'Display only recent galeries',
        );

        parent::__construct( 'recent_galeries', 'Neze Galería más Reciente' ,$widget_options );
    }

    // Back-end display of widget
    public function form( $instance ) {
        echo 'Sin opciones para mostrar';
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        echo $args[ 'before_widget' ];

        ?>
            <?php
            $args = [
                'category_name' => 'galerias',
                'posts_per_page' => 1,
            ];
            $the_query = new WP_Query( $args );
            ?>
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();

            ?>
            <div>
                <a href="<?php the_permalink(  ); ?>">
                <?php the_title(  ); ?>
            </a>
                <?php the_content(  ); ?>
            </div>

            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>



        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Recent_galeries' );
} );