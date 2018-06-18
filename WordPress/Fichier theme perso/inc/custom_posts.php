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







/*
    Enregistrement et déclaration des taxonomies personnalisées utiles au thème
    project_type -> Type de projet (hierarchique = catégorie)
    project_color -> Couleur du projet (non hierarchique = mot clé)
*/ 
function marble_register_my_taxes() {

	/**
	 * Taxonomy: Types de projet.
	 */

	$labels = array(
		"name" => __( "Types de projet", "" ),
		"singular_name" => __( "Type de projet", "" ),
	);

	$args = array(
		"label" => __( "Types de projet", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Types de projet",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'project_type', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "project_type",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "project_type", array( "project" ), $args );

	/**
	 * Taxonomy: Couleurs du projet.
	 */

	$labels = array(
		"name" => __( "Couleurs du projet", "" ),
		"singular_name" => __( "Couleur du projet", "" ),
	);

	$args = array(
		"label" => __( "Couleurs du projet", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Couleurs du projet",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'project_color', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "project_color",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "project_color", array( "project" ), $args );
}

add_action( 'init', 'marble_register_my_taxes' );
