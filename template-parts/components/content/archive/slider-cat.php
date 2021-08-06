<?php
    if ( is_category('noticias') ) {
        dynamic_sidebar( 'sidebar-cats-news' );
    } elseif( is_category( 'juegos' ) ) {
        dynamic_sidebar( 'sidebar-cats-games' );
    }elseif( is_category( 'guias' ) ) {
        dynamic_sidebar( 'sidebar-cats-guides' );
    }else{
        echo 'hola';
    }
