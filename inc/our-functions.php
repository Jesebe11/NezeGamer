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