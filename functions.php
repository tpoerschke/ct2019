<?php
/**
 * ct2019
 * Functions und co.
 */

// FUNKTIONEN
// Gibt den Paginator aus
function show_pagination() {
		the_posts_pagination(array(
			'type'               => 'list',
			'prev_text'          => '&laquo; Zur&uuml;ck',
			'next_text'          => 'Weiter &raquo;',
			'screen_reader_text' => ' '
		));
}

// Hilft dabei, die Verzeichnisse aller assets
// zu verwalten.
function assetsPath($assetType) {
  $assetsPath = get_template_directory_uri() . '/assets';

  switch ($assetType) {
    case 'javascript': $assetsPath .= '/js'; break;
    case 'image':      $assetsPath .= '/img'; break;
    default:           $assetsPath .= '/js';
  }
  // Den zusammengebastelten String ausgeben
  echo $assetsPath;
}

// THEME SUPPORT UND INITIALISIERUNG
// TODO: alles in eine init-Funktion schreiben ?
register_nav_menus(array(
	'navbarMenu' => __('Navbar Menu', 'ct2019'),
  	'footerMenu' => __('Footer Menu', 'ct2019')
));

// Fügt die nötigen Bootstrap-Klassen in die Menu-Iems ein
function bootstrap_nav_class($classes, $item) {
    if(in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
	if(in_array('menu-item', $classes)) {
        $classes[] = 'nav-item';
    }
    return $classes;
}

function add_bootstrap_atts($atts, $item, $args) {
    // Bootstrap-Klassen zum NavbarMenu hinzufügen
    if($args->theme_location == 'navbarMenu') {
      $atts['class'] = 'nav-link';
    }
    return $atts;
}

// Funktionen für Bootstrap (s.o.) bekannt machen
add_filter('nav_menu_css_class' , 'bootstrap_nav_class' , 10 , 2);
add_filter('nav_menu_link_attributes', 'add_bootstrap_atts', 10, 3);

function widgets_init() {

    register_sidebar( array(
        'name' => __( '1. Fu&#xdf;bereich (Widgets)'),
        'id' => 'first-footer-widget-area',
        'description' => __( '1. Bereich f&uuml;r Widgets innerhalb des Footer'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );

	register_sidebar( array(
        'name' => __( '2. Fu&#xdf;bereich (Widgets)'),
        'id' => 'second-footer-widget-area',
        'description' => __( '2. Bereich f&uuml;r Widgets innerhalb des Footer'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );


	register_sidebar( array(
        'name' => __( '3. Fu&#xdf;bereich (Widgets)'),
        'id' => 'third-footer-widget-area',
        'description' => __( '3. Bereich f&uuml;r Widgets innerhalb des Footer. HINWEIS: Sollte nur f&uuml;r Icons benutzt werden!'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );
}

add_action( 'widgets_init', 'widgets_init' );

// Damit Beitragsbilder möglich sind.
// TODO: ggf. entfernen
add_theme_support( 'post-thumbnails' );
