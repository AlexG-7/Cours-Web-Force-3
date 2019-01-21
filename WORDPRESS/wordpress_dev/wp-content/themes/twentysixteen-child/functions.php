<?php

// la fonction suivante permet de récupérer le style.css du thème parent
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}

// Déclaration de nouvelles zones pour accueillir des widgets.
// register_sidebar() est une fonction prédéfinies de wordpress prévue pour ça.
// pour appeler cette région: dynamic_sidebar( 'footer_pleine_largeur' );

// pour %1$s et %2$s voir fonction prédéfinies php sprintf()
register_sidebar( array(
	'name'			=>	'Région footer pleine largeur',
	'id'			=>	'footer_pleine_largeur',
	'description'	=>	'Première région du footer en pleine largeur',
	'before_widget'	=>	'<aside  class="%2$s" id="%1$s">',
	'after_widget'	=> 	'</aside>',
	'before_title'	=> 	'<h2 class="widget-title">',
	'after_title'	=> 	'</h2>',
) );

register_sidebar( array(
	'name'			=>	'Région footer à gauche',
	'id'			=>	'footer_gauche',
	'description'	=>	'Région du footer à gauche',
	'before_widget'	=>	'<aside  class="%2$s" id="%1$s">',
	'after_widget'	=> 	'</aside>',
	'before_title'	=> 	'<h2 class="widget-title">',
	'after_title'	=> 	'</h2>',
) );

register_sidebar( array(
	'name'			=>	'Région footer au milieu',
	'id'			=>	'footer_milieu',
	'description'	=>	'Région du footer au milieu',
	'before_widget'	=>	'<aside  class="%2$s" id="%1$s">',
	'after_widget'	=> 	'</aside>',
	'before_title'	=> 	'<h2 class="widget-title">',
	'after_title'	=> 	'</h2>',
) );

register_sidebar( array(
	'name'			=>	'Région footer à droite',
	'id'			=>	'footer_droite',
	'description'	=>	'Région du footer à droite',
	'before_widget'	=>	'<aside  class="%2$s" id="%1$s">',
	'after_widget'	=> 	'</aside>',
	'before_title'	=> 	'<h2 class="widget-title">',
	'after_title'	=> 	'</h2>',
) );



















