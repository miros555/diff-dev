<?php
/**
 * The template for displaying 404 pages (not found)
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package komanda
 */
get_header();
?>
	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'komanda' ); ?></h1>
				<div class="sub-page-title">404</div>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'komanda' ); ?></p>
				<a href="<?php echo get_home_url();?>" class="cta_link"><?php _e('Back to home', 'komanda');?></a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
<?php
get_footer();
