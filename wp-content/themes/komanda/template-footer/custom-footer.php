<?php
/**
 * Template Name: footer 1
 * Template Post Type: footer
 */
	$footer_posts = get_field('footer_template','options');
	if( $footer_posts ): 
		$query = new WP_Query( [
			'post_type' => 'footer',
			'p'  => (int)$footer_posts
		] );
		if (  $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post(); 
					the_content();
				endwhile;
		endif;
		wp_reset_postdata(  );
	endif;
