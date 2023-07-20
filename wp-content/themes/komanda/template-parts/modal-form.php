<?php
/** modal-form */

        $query = new WP_Query( [
            'post_type' => 'kmnd-popup',
            'post_status'=>'publish'
        ] );
        if (  $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post(); 
                    the_content();
                endwhile;
        endif;
        wp_reset_postdata(  );
