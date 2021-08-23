<?php

/**
 * Traer cierta cantidad especifica de post para las archive
*/

function bellner_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
    return;
    }

    if ( is_archive(  ) ) {
    $query->set( 'posts_per_page', 6 );
    }
}
add_filter( 'pre_get_posts', 'bellner_change_posts_per_page' );


// Remover tab my account address
add_filter( 'woocommerce_account_menu_items', 'bellner_remove_address_my_account', 999 );

function bellner_remove_address_my_account( $items ) {

unset($items['edit-address']);

return $items;

}

//Filter for add a different template by cat

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
foreach( (array) get_the_category() as $cat )
{
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
    $cat = get_the_category_by_ID( $cat->parent );
        if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
}
    return $t;
}