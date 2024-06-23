<?php

function theme_assets(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    if(is_front_page()){
        wp_enqueue_style( 'child-style-front-page', get_theme_file_uri() . '/css/front_page.css');
    }elseif(is_singular("recipe")){
        wp_enqueue_style( 'child-style-single-recipe', get_theme_file_uri() . '/css/single-recipe.css');
    }
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );


function cpt_recipe() {
	
    $labels = array(
        'name' => 'Recettes',
        'all_items' => 'Toute les recettes',
        'singular_name' => 'Recette',
        'add_new' => 'Ajouter une recette',
        'add_new_item' => 'Ajouter une recette',
        'edit_item' => 'Modifier une recettes',
        'menu_name' => 'Recettes'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title'),
        'menu_position' => 5, 
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg data-slot="icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z"></path>
        </svg>')
	);

	register_post_type( 'recipe', $args );
}

add_action( 'init', 'cpt_recipe' );