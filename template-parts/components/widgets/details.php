<?php

class Top_Head extends WP_Widget {

    public function __construct() {
        $widget_options = array(
            'classname' => 'widget_details',
            'description' => 'Display for show details',
        );

        parent::__construct( 'details', 'Neze Details' ,$widget_options );
    }

    // Back-end display of widget
    public function form( $instance ) {
        echo 'Sin opciones para mostrar';
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {

        echo $args[ 'before_widget' ];

        ?>

            <p class="top-head__details top-head__details--number">+58 416-302-21-30</p>
            <hr class="separador">
            <p class="top-head__details top-head__details--email">nezegamer@gmail.com</p>


        <?php

        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Top_Head' );
} );