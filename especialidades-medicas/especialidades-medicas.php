<?php
/*
Plugin Name: Especialidades Medicas
Plugin URI:  https://www.planb.ec
Description: Agrega especialidades del Centro Médico
Version:     1.0
Author:      CarlosZ
Author URI:  https://www.planb.ec
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: especialidades-medicas
Domain Path: /languages
*/


if ( ! function_exists('especialidades_post_type') ) {

// Register Custom Post Type
function especialidades_post_type() {

	$labels = array(
		'name'                  => _x( 'Especialidades', 'Post Type General Name', 'mimedik-especialidades' ),
		'singular_name'         => _x( 'Especialidad', 'Post Type Singular Name', 'mimedik-especialidades' ),
		'menu_name'             => __( 'Especialidades', 'mimedik-especialidades' ),
		'name_admin_bar'        => __( 'Especialidades', 'mimedik-especialidades' ),
		'archives'              => __( 'Archivo de especialidades', 'mimedik-especialidades' ),
		'attributes'            => __( 'Atributos', 'mimedik-especialidades' ),
		'parent_item_colon'     => __( 'Item:superior', 'mimedik-especialidades' ),
		'all_items'             => __( 'Todos', 'mimedik-especialidades' ),
		'add_new_item'          => __( 'Agregar nuevo Item', 'mimedik-especialidades' ),
		'add_new'               => __( 'Agregar nuevo', 'mimedik-especialidades' ),
		'new_item'              => __( 'Nuevo item', 'mimedik-especialidades' ),
		'edit_item'             => __( 'Editar Item', 'mimedik-especialidades' ),
		'update_item'           => __( 'Actualizar Item', 'mimedik-especialidades' ),
		'view_item'             => __( 'Ver', 'mimedik-especialidades' ),
		'view_items'            => __( 'Ver Items', 'mimedik-especialidades' ),
		'search_items'          => __( 'Buscar Item', 'mimedik-especialidades' ),
		'not_found'             => __( 'No encontrado', 'mimedik-especialidades' ),
		'not_found_in_trash'    => __( 'No encontrado em papelera', 'mimedik-especialidades' ),
		'featured_image'        => __( 'Imagen destacada', 'mimedik-especialidades' ),
		'set_featured_image'    => __( 'Definir imagen destacada', 'mimedik-especialidades' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'mimedik-especialidades' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mimedik-especialidades' ),
		'insert_into_item'      => __( 'Insertar', 'mimedik-especialidades' ),
		'uploaded_to_this_item' => __( 'Actualizar item', 'mimedik-especialidades' ),
		'items_list'            => __( 'Lista de items', 'mimedik-especialidades' ),
		'items_list_navigation' => __( 'Lista de navegacion', 'mimedik-especialidades' ),
		'filter_items_list'     => __( 'Filtrar lista de items', 'mimedik-especialidades' ),
	);
	$args = array(
		'label'                 => __( 'Especialidad', 'mimedik-especialidades' ),
		'description'           => __( 'Especialidades del Centro Medico MiMedik', 'mimedik-especialidades' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'especialidades', $args );

}
add_action( 'init', 'especialidades_post_type', 0 );

}