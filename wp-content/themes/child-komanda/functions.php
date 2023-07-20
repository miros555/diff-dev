<?php
/**
 *
 * child function
 */
include 'inc/gutenbergAcfFunction.php';

add_action( 'wp_enqueue_scripts', 'komanda_child_theme_scripts', 11 );
function komanda_child_theme_scripts() {
	wp_dequeue_style('komanda-style-main');
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
	wp_enqueue_style( 'child-second-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'query-style', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
	wp_enqueue_style( 'date-style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css');
	wp_enqueue_script('date-ui', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js", ['jquery'], false);
	wp_enqueue_script('cities-js', get_stylesheet_directory_uri() . '/assets/js/cities.js', [], false); 	
	wp_enqueue_script('jquery-ui', "https://code.jquery.com/ui/1.12.1/jquery-ui.js", ['jquery'], false);	
	wp_enqueue_script('child-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery', 'cities-js'], false);  //, 'pdfMake-js', 'html-pdfMake-js'
}

add_action( 'admin_enqueue_scripts', 'kmnd_theme_child_admin_style');
function kmnd_theme_child_admin_style(){
    wp_enqueue_style( 'kmnd-komanda-child-admin-style', get_stylesheet_directory_uri() . '/admin/child-admin-style.css', false ); 
}


add_action( 'wp_head', 'my_theme_add_editor_styles' );
function my_theme_add_editor_styles() { ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script>
	function get_name_browser(){
		var ua = navigator.userAgent;    
		if (ua.search(/Safari/) > 0) return true;
		return false;
	}
	if (get_name_browser()) {
	 document.write('<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/assets/css/safari.css">');
	}
	</script>
<?php 
	 
}

add_action("admin_menu", "remove_menus");
function remove_menus() {
    remove_menu_page("index.php");               
    remove_menu_page("edit.php");                 
    remove_menu_page("edit-comments.php");        
    remove_menu_page("edit.php?post_type=header");  
	remove_menu_page("edit.php?post_type=footer");
	remove_menu_page("edit.php?post_type=artist");              
    remove_menu_page("themes.php");               
    remove_menu_page("plugins.php");              
    remove_menu_page("users.php");               
    remove_menu_page("tools.php");                
    remove_menu_page("options-general.php");      
    remove_menu_page("edit.php?post_type=acf-field-group"); 
}

