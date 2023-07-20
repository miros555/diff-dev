<?php
/**
 * 
 * Kоmanda Theme Init
 */
if( !function_exists('requiredFileAdmin') ){
    function requiredFileAdmin($fileName){
        $filePath = get_template_directory() . $fileName;
        if(file_exists($filePath) && is_admin() ){
            include $filePath;
        }
    }
}
if( !function_exists('requiredFile') ){
    function requiredFile($fileName){
        $filePath = get_template_directory() . $fileName;
        if(file_exists($filePath) ){
            include $filePath;
        }
    }
}
requiredFile('/kmnd-theme_settings/settingsPage.php');
requiredFile('/kmnd-theme_settings/settingsPageField.php');
//requiredFileAdmin('/kmnd-theme_settings/required_plugins.php');
requiredFile('/kmnd-theme_settings/kmnd-logo.php');
//requiredFile('/kmnd-theme_settings/root_css.php');
// kmnd_theme_notice
add_action( 'admin_notices', 'kmnd_theme_notice', 5 );
function kmnd_theme_notice() {
    ?>
    <div class="notice kmnd_notice"> 
        <button type="button" id="kmnd_notice-close" class="notice-dismiss"><span class="screen-reader-text">Скрыть это уведомление.</span></button>
        <a href="https://komanda.dev/" target="_blank">
        <div class = "kmnd_notice-logo" style="background:url(<?php echo get_template_directory_uri();?>/kmnd-theme_settings/admin/assets/images/Frame-10.png) no-repeat center /cover;"></div>
        <h2><?php _e('We are a team','komanda');?> </h2>
        <h3><span><?php _e('WordPress developers','komanda');?></span></h3>
        <p><?php _e('We create from scratch and support ready-made projects on WordPress. We make projects of various scales - from Landings to sites of millionaires.','komanda');?></p>
        <p class="kmnd_notice-adress"> komanda.dev</p>
        </a>
    </div>
    <?php
}
add_action( 'admin_enqueue_scripts', 'kmnd_theme_settings_script');
// admin-style
function kmnd_theme_settings_script(){
    wp_enqueue_style( 'kmnd-komanda-admin-style', get_template_directory_uri() . '/kmnd-theme_settings/admin/assets/css/styles.css', false ); 
    wp_enqueue_script( "kmnd-komanda-admin-js", get_template_directory_uri() . '/kmnd-theme_settings/admin/assets/js/main.js', '', '0.01',  true );
}
