<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nezegamer_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'NezeGamer Cintillo', 'nezegamer' ),
			'id'            => 'sidebar-top-head',
			'description'   => esc_html__( 'Añade elementos al cintillo del header', 'nezegamer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'NezeGamer Navs footer', 'nezegamer' ),
			'id'            => 'sidebar-navs-footer',
			'description'   => esc_html__( 'Añade menus al footer', 'nezegamer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'NezeGamer Gameplays', 'nezegamer' ),
			'id'            => 'sidebar-gameplays',
			'description'   => esc_html__( 'Añade Gameplays al bloque de videos', 'nezegamer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'NezeGamer matches', 'nezegamer' ),
			'id'            => 'sidebar-matches',
			'description'   => esc_html__( 'Añade matches al bloque de matches', 'nezegamer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nezegamer_widgets_init' );
?>