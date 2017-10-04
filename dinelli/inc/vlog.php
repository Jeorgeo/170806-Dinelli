<?php

add_action( 'init', 'register_cpt_vlog' );
function register_cpt_vlog() {

	$labels = array(
		'name' => __( 'Видео записи', 'vlog' ),
		'singular_name' => __( 'Видео записи', 'vlog' ),
		'add_new' => __( 'Добавить Видео запись', 'vlog' ),
		'add_new_item' => __( 'Добавить Видео запись', 'vlog' ),
		'edit_item' => __( 'Редактировать страницу Видео запись', 'vlog' ),
		'new_item' => __( 'Новая страница с Видео записью', 'vlog' ),
		'view_item' => __( 'Посмотреть страницу с Видео записью', 'vlog' ),
		'search_items' => __( 'Найти страницу с Видео записью', 'vlog' ),
		'not_found' => __( 'Ничего не найдено', 'vlog' ),
		'not_found_in_trash' => __( 'Ничего не найдено в корзине', 'vlog' ),
		'parent_item_colon' => __( 'Родитель:', 'vlog' ),
		'menu_name' => __( 'Видео записи', 'vlog' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'page-attributes' ),
		//'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies' => array(  ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		//'menu_icon' => 'icon.png',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'vlog', $args );
}

?>
