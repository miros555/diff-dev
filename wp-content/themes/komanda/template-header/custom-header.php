<?php
/**
 * header
 */
$header_posts = get_field('header_tamplate','options');
if( $header_posts ): 
	$query = new WP_Query( [
		'post_type' => 'header',
		'p'  => (int)$header_posts
	] );
	if (  $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post(); 
		the_content();
			endwhile;
	endif;
	wp_reset_postdata(  );
endif;
