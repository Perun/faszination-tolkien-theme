<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
add_theme_support( 'post-thumbnails' );

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '" title="Den Rest des Artikels lesen">' . '&raquo;&raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// entfernt den more-Link
function remove_more_jump_link($link) {
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// add category nicenames in body and post class
	function category_id_class($classes) {
	    global $post;
	    foreach((get_the_category($post->ID)) as $category)
	        $classes[] = $category->category_nicename;
	        return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

// MENÜ
function die_hauptnavi() {
	register_nav_menus(
		array(
			'haupt_navi' => 'Die Hauptnavigation',
		)
	);
}

add_action( 'init', 'die_hauptnavi' );

function meine_hauptnavi() {
    if ( function_exists( 'wp_nav_menu' ) )
        wp_nav_menu( 'menu=haupt_navi&container_class=pagemenu&fallback_cb=die_ersatznavi' );
    else
        die_ersatznavi();
}

function die_ersatznavi() {
echo "    <ul class=\"hauptnavi\">
        <li><a href=\"http://www.faszination-tolkien.de/zusammenfassung-hobbit-herr-der-ringe/\" class=\"hn-1\" title=\"Bebilderte Zusammenfassungen von Der Hobbit und Herr der Ringe\">Zusammenfassungen</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/die-ringe-der-macht/\" class=\"hn-2\" title=\"Die Ringe Macht\">Die Ringe</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/geschichte-arda-mittelerde/\" class=\"hn-3\" title=\"Die Geschichte von Arda und Mittelerde\">Geschichte</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/landeskunde-mittelerde/\" class=\"hn-4\" title=\"Die Landeskunde von Mittelerde\">Landeskunde</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/personen-mittelerde/\" class=\"hn-5\">Wichtige Personen</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/voelker-wesen-mittelerde/\" class=\"hn-6\">Völker und Wesen</a></li>
        <li><a href=\"http://www.faszination-tolkien.de/jrr-tolkien/\" class=\"hn-7\">J. R. R. Tolkien</a></li>
    </ul>";
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}

// Eine zusätzliche Bildgröße
add_image_size('voll_bild_caption', 510, 650);
add_image_size('voll_bild_ohne_caption', 528, 650);

// // damit diese zusätliche Bildgröße auch in der Mediathek zur Auswahl steht
add_filter('image_size_names_choose', 'custom_image_sizes_choose');
function custom_image_sizes_choose($sizes) {
	$custom_sizes = array(
		'voll_bild_caption' => 'Caption volle Breite',
        'voll_bild_ohne_caption' => 'Ohne Caption volle Breite'
	);
	return array_merge($sizes, $custom_sizes);
}

// Jetpack CSS entfernen
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
