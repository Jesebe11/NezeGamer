<?php
    if ( is_category('noticias') ) {
        dynamic_sidebar( 'sidebar-cats-parent-one' );
    } elseif( is_category( 'juegos' ) ) {
        dynamic_sidebar( 'sidebar-cats-parent-two' );
    }elseif( is_category( 'guias' ) ) {
        dynamic_sidebar( 'sidebar-cats-parent-three' );
    }else{
        echo 'Uppps falta un configurar sliders de categorias';
    }
