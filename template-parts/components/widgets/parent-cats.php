<?php

class Parent_cats extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_parent',
            'description' => 'Display only parents cats',
        );

        parent::__construct( 'parent', 'Neze Categories' ,$widget_options );
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
            $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'parent'   => 0,
                    'hide_empty' => 0,
                    'exclude'   => '1'
                    // we can also exclude parent categories from listing
                );

                $categories = get_categories( $args );
                echo "<ul>";
                for($i = 0; $i < count($categories); $i++){
                    echo '<li><a href="'.get_site_url().'/'.$categories[$i]->slug.'/">'.$categories[$i]->name.'</a></li>';
                }
                echo "</ul>";
            ?>


        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Parent_cats' );
} );