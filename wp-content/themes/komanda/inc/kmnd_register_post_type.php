<?php
/***
 * register post type this theme
 * 
 */
if(!function_exists('kmnd_register_post_types') ){
	add_action( 'init', 'kmnd_register_post_types' );
	function kmnd_register_post_types(){
		/**
		 * 
		 * header 
		 */
		register_post_type( 'header', [
			'label'  => null,
			'labels' => [
				'name'               => 'header', // основное название для типа записи
				'singular_name'      => __('header tamplate','komanda'), // название для одной записи этого типа
				'add_new'            => __('Add','komanda'), // для добавления новой записи
				'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование ____', // для редактирования типа записи
				'new_item'           => __('New','komanda'), // текст новой записи
				'view_item'          => __('View','komanda'), // для просмотра записи этого типа.
				'search_items'       => __('Search','komanda'), // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Header', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			'exclude_from_search' => true, // зависит от public
			'show_ui'             => true, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-table-row-after',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor','custom-fields', 'page-attributes','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );

		/** 
		 * footer 
		 * 
		 */
		register_post_type( 'footer', [
			'label'  => null,
			'labels' => [
				'name'               => 'footer', // основное название для типа записи
				'singular_name'      => __('footer tamplate','komanda'), // название для одной записи этого типа
				'add_new'            => __('Add','komanda'), // для добавления новой записи
				'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование ____', // для редактирования типа записи
				'new_item'           => __('New','komanda'), // текст новой записи
				'view_item'          => __('View','komanda'), // для просмотра записи этого типа.
				'search_items'       => __('Search','komanda'), // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Footer', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			'exclude_from_search' => true, // зависит от public
			'show_ui'             => true, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-table-row-before',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor','custom-fields', 'page-attributes','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}
}