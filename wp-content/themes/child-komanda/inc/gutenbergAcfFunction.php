<?php
/**
 * register acf blocks 
 * 
 * colection icons https://inverser.pro/135-dashicons
 *
 *  dashicons-slides  - > slides
 * 'icon' => slides
 * 
 */
function child_kmnd_register_blocks_acf() {
    $template_path = '/libs/acf/';
    $stylesheet_path = get_stylesheet_directory_uri() . $template_path;
    $stylesheet_preview = get_stylesheet_directory_uri() . '/assets/img-acf/';
    if( function_exists( 'acf_register_block' ) ) {
        
		 acf_register_block(array(
            'name'              => 'doc_pdf',
            'title'             => __('Pdf Doc'),
            'description'       => __('Секція.'),
            'icon'              => 'products',
            'keywords'          => array('pdf', 'doc'),
            'render_template'   => $template_path . 'pdf_doc/render.php',
            //'enqueue_style'     => $stylesheet_path . 'pdf_doc/app-styles.css',
            'category'          => 'tamplate_kmnd',
            'mode'              => 'edit',
            'align'             => 'full'     
        ));
		
		
		
		
    }
}

add_action( 'acf/init', 'child_kmnd_register_blocks_acf' );
