<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package komanda
 */
?>
	<footer id="footer"  itemscope itemtype="https://schema.org/WPFooter" class="site-footer">
		<?php get_template_part( 'template-footer/custom', 'footer' );?>
		<?php get_template_part( 'template-footer/cooperation', 'footer' );?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php get_template_part( 'template-parts/modal', 'form' );?>
<?php wp_footer(); ?>
</body>
</html>
