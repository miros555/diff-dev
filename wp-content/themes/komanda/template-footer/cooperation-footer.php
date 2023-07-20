<?php
/**
 * 
 * 
 */

$local = get_user_locale();
$copywriting_text = get_field('copywriting_text_ua', 'options') ? get_field('copywriting_text_ua', 'options') : '';
$copywriting_data_start = get_field('copywriting_data_start', 'options') ? get_field('copywriting_data_start', 'options') . ' - ' : '';
$create_themes = 'Сайт розробила';
if($local == 'ru_RU'){
	$copywriting_text = get_field('copywriting_text_ru', 'options') ? get_field('copywriting_text_ru', 'options') : '';
	$create_themes = 'Сайт создала';
}
if($local == 'en_US'){
	$copywriting_text = get_field('copywriting_text_en', 'options') ? get_field('copywriting_text_en', 'options') : '';
	$create_themes = 'Site created';
}
?>
<div class="container cooperation-container">
	<div class="footer-cooperation">© <?php echo $copywriting_data_start , date('Y').' '. $copywriting_text;?> </div>
	<div class="site_created"><?php echo $create_themes;?> <a href="https://komanda.dev/" target="_blank">komanda.dev</a></div>
</div>
