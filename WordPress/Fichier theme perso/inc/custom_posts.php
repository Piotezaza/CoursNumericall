<?php

/*
    Enregistrement et déclaration des contenus personnalisés utiles au thème
    projects -> custom post
*/ 

function marble_register_my_cpts() {

	/**
	 * Post Type: Projets.
	 */

	$labels = array(
		"name" => __( "Projets", "" ),
		"singular_name" => __( "Projet", "" ),
	);

	$args = array(
		"label" => __( "Projets", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => "projets",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "project", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	);

	register_post_type( "project", $args );
}

add_action( 'init', 'marble_register_my_cpts' );
