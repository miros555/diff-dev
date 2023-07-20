<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komanda
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container searh-post d-flex-flow-row-wrapp m-25-0">
		<figure class="searh-post-thumbnail">
			<?php komanda_post_thumbnail(); ?>
		</figure>
		<div class="searh-post-content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
