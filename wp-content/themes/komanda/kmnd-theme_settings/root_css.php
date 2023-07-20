<?php
/**
 * global style css
 * 
 *  echo in <head>
 * 
*/
function kmnd_root_css_title( $field = null, $number = 0 ){
    if( $field != null && $number > 0 ){
            echo $field['font_family'] ? '--kmnd-h' . $number . '-font-family:' . $field['font_family'] . ';' : '';
            echo $field['color'] ? '--kmnd-h' . $number . '-color:' . $field['color'] . ';' : '';
            echo $field['text-align'] ? '--kmnd-h' . $number . '-text-align:' . $field['text-align'] . ';' : '';
            echo $field['font_size'] ? '--kmnd-h' . $number . '-font-size:' . (int)$field['font_size'] / 16 . 'rem;' : '';
            echo $field['font_weight'] ? '--kmnd-h' . $number . '-font-weight:' .$field['font_weight'] . ';' : '';
            echo $field['letter_spacing'] ? '--kmnd-h' . $number . '-letter-spacing:' . $field['letter_spacing'] . ';' : '';
            echo $field['line_height'] ? '--kmnd-h' . $number . '-line-height:' . $field['line_height'] . ';' : '';
            echo $field['padding'] ? '--kmnd-h' . $number . '-padding:' . $field['padding'] . ';' : '';
            echo $field['margin'] ? '--kmnd-h' . $number . '-margin:' . $field['margin'] . ';' : '';
            echo $field['font_size_mob'] ? '--kmnd-h' . $number . '-font_size_mob:' . (int)$field['font_size_mob'] / 16 . 'rem;' : '';
    }
}

function kmnd_root_css(){ ?>
<style>
    :root{ 
        <?php
        /** body_style */
        if( get_field('body_style','options') ) :
            $body_style = get_field('body_style','options');
            echo $body_style['background_color'] ? '--kmnd-body-background-color-primary:' . $body_style['background_color'] . ';' : '';
            echo $body_style['color'] ? '--kmnd-body-color:' . $body_style['color'] . ';' : '';
            echo $body_style['color_secondary'] ? '--kmnd-body-color-secondary:' . $body_style['color_secondary'] . ';' : '';
            echo '--kmnd-body-border-color:var(--kmnd-body-color-secondary);';
            echo $body_style['letter_spacing'] ? '--kmnd-body-letter-spacing:' . $body_style['letter_spacing'] . ';' : '';
            echo $body_style['font_family'] ? '--kmnd-body-font-family-primary:' . $body_style['font_family'] . ';' : '';
            echo $body_style['font_family_secondary'] ? '--kmnd-body-font-family-secondary:' . $body_style['font_family_secondary'] . ';' : '';
            echo $body_style['font_family_tertiary'] ? '--kmnd-body-tertiary-font-family:' . $body_style['font_family_tertiary'] . ';' : '';
            echo $body_style['line_height'] ? '--kmnd-body-line-height:' . $body_style['line_height'] . ';' : '';
            echo $body_style['font_weight'] ? '--kmnd-body-font-weight:' . $body_style['font_weight'] . ';' : '';
            echo $body_style['transition_animate'] ? '--kmnd-body-transition:' . $body_style['transition_animate'] . ';' : '';
        endif;
        /** a_link_text */ 
        if( get_field('a_link_text','options') ) :
            $a_link_text = get_field('a_link_text','options');
            echo $a_link_text['background_color'] ? '--kmnd-a-background-color:' . $a_link_text['background_color'] . ';' : '';
            echo $a_link_text['color'] ? '--kmnd-a-color:' . $a_link_text['color'] . ';' : '';
            echo $a_link_text['letter_spacing'] ? '--kmnd-a-letter-spacing:' . $a_link_text['letter_spacing'] . ';' : '';
            echo $a_link_text['text_decoration'] ? '--kmnd-a-text-decoration:' . $a_link_text['text_decoration'] . ';' : '';
            echo $a_link_text['font_family'] ? '--kmnd-a-font-family:' . $a_link_text['font_family'] . ';' : '';
            echo $a_link_text['border-bottom'] ? '--kmnd-a-border-bottom:' . $a_link_text['border-bottom'] . ';' : '';
            echo $a_link_text['font_size'] ? '--kmnd-a-font-size:' . $a_link_text['font_size'] . ';' : '';
            echo $a_link_text['font-style'] ? '--kmnd-a-font-style:' . $a_link_text['font-style'] . ';' : '';
            echo $a_link_text['line_height'] ? '--kmnd-a-line-height:' . $a_link_text['line_height'] . ';' : '';
            echo $a_link_text['font_weight'] ? '--kmnd-a-font-weight:' .$a_link_text['font_weight'] . ';' : '';
        endif;
        /** a_link_text_hover */
        if( get_field('a_link_text_hover','options') ) :
            $a_link_text_hover = get_field('a_link_text_hover','options');
            echo $a_link_text_hover['background_color'] ? '--kmnd-a-hover-background-color:' . $a_link_text_hover['background_color'] . ';' : '';
            echo $a_link_text_hover['color'] ? '--kmnd-a-hover-color:' . $a_link_text_hover['color'] . ';' : '';
            echo $a_link_text_hover['border-bottom'] ? '--kmnd-a-border-bottom-hover:' . $a_link_text_hover['border-bottom'] . ';' : '';
            echo $a_link_text_hover['text_decoration'] ? '--kmnd-a-hover-text-decoration:' . $a_link_text_hover['text_decoration'] . ';' : '';
            echo $a_link_text_hover['opacity'] ? '--kmnd-a-hover-opacity:' . $a_link_text_hover['opacity'] . ';' : '1;';
        endif;
        /** CTA  */
        if( get_field('cta_link','options') ) :
            $cta_link = get_field('cta_link','options');
            echo $cta_link['font_family'] ? '--kmnd-cta-font-family:' . $cta_link['font_family'] . ';' : '';
            echo $cta_link['color'] ? '--kmnd-cta-color:' . $cta_link['color'] . ';' : '';
            echo $cta_link['text_decoration'] ? '--kmnd-cta-text-decoration:' . $cta_link['text_decoration'] . ';' : '';
            echo $cta_link['background_color'] ? '--kmnd-cta-background-color:' . $cta_link['background_color'] . ';' : '';
            echo $cta_link['font_size'] ? '--kmnd-cta-font-size:' . $cta_link['font_size'] / 16 . 'rem;' : '';
            echo $cta_link['font_weight'] ? '--kmnd-cta-font-weight:' . $cta_link['font_weight'] . ';' : '';
            echo $cta_link['letter_spacing'] ? '--kmnd-cta-letter-spacing:' . $cta_link['letter_spacing'] . ';' : '';
            echo $cta_link['font-style'] ? '--kmnd-cta-font-style:' . $cta_link['font-style'] . ';' : '';
            echo $cta_link['line_height'] ? '--kmnd-cta-line-height:' . $cta_link['line_height'] . ';' : '';
            echo $cta_link['padding'] ? '--kmnd-cta-padding:' . $cta_link['padding'] . ';' : '';
            echo $cta_link['margin'] ? '--kmnd-cta-margin:' . $cta_link['margin'] . ';' : '';
            echo $cta_link['border_radius'] ? '--kmnd-cta-border-radius:' . $cta_link['border_radius'] . 'px;' : '';
            $cta_link_border_line = $cta_link['border_line'] ? $cta_link['border_line'] : '';
            $cta_link_border_color = $cta_link['border_color'] ? $cta_link['border_color'] : '';
            echo $cta_link['border_color'] ? '--kmnd-cta-border-color:' . $cta_link['border_color'] . ';' : '';
            if ( $cta_link_border_line != '' && $cta_link_border_color != '' ){
                echo '--kmnd-cta-border:' . $cta_link_border_line .'px solid ' . $cta_link_border_color . ';' ;
            }
        endif;
         /** CTA :hover */
         if( get_field('cta_link_hover','options') ) :
            $cta_link_hover = get_field('cta_link_hover','options');
            echo $cta_link_hover['color'] ? '--kmnd-cta-hover-color:' . $cta_link_hover['color'] . ';' : '';
            echo $cta_link_hover['text_decoration'] ? '--kmnd-cta-hover-text-decoration:' . $cta_link_hover['text_decoration'] . ';' : '';
            echo $cta_link_hover['background_color'] ? '--kmnd-cta-hover-background-color:' . $cta_link_hover['background_color'] . ';' : '';
            if( $cta_link_hover['border_radius'] && $cta_link_hover['border_radius'] != '' ) {
                echo '--kmnd-cta-hover-border-radius:' . $cta_link_hover['border_radius'] . 'px;' ;
             }else{
                echo '--kmnd-cta-hover-border-radius:' . $cta_link['border_radius'] . 'px;';
            }
            echo $cta_link_hover['border_color'] ? '--kmnd-cta-hover-border:' . $cta_link_hover['border_color'] . ';' : '' ;
        endif;
        if( get_field('input_form','options') ) :
            $input_form = get_field('input_form','options');
            echo $input_form['font_family'] ? '--kmnd-input-font-family:' . $input_form['font_family'] . ';' : '';
            echo $input_form['color'] ? '--kmnd-input-color:' . $input_form['color'] . ';' : '';
            echo $input_form['background_color'] ? '--kmnd-input-background-color:' . $input_form['background_color'] . ';' : '';
            echo $input_form['font_size'] ? '--kmnd-input-font-size:' . (int)$input_form['font_size'] / 16 . 'rem;' : '';
            echo $input_form['padding'] ? '--kmnd-input-padding:' . $input_form['padding'] . ';' : '';
            echo $input_form['margin'] ? '--kmnd-input-margin:' . $input_form['margin'] . ';' : '';
            echo $input_form['border_radius'] ? '--kmnd-input-border-radius:' . $input_form['border_radius'] . 'px;' : '';
            $cta_link_border_line = $input_form['border_line'] ? $input_form['border_line'] : '';
            $cta_link_border_color = $input_form['border_color'] ? $input_form['border_color'] : '';
            if ( $cta_link_border_line != '' && $cta_link_border_color != '' ){
                echo '--kmnd-input-border:' . $cta_link_border_line .'px solid ' . $cta_link_border_color . ';' ;
            }
        endif;
        if( get_field('container_width','options') && trim(get_field('container_width','options')) != '')
            echo '--kmnd-container-max-width:' . get_field('container_width','options') . 'px;';

        if( get_field('section_padding_top','options') && trim(get_field('section_padding_top','options')) != '')
            echo '--kmnd-section-padding-top:' . get_field('section_padding_top','options') . 'px;';

        if( get_field('section_padding_bottom','options') && trim(get_field('section_padding_bottom','options')) != '')
            echo '--kmnd-section-padding-bottom:' . get_field('section_padding_bottom','options') . 'px;';
        
        /** title  */
        for($i = 1; $i < 6; $i++){
            kmnd_root_css_title(get_field('h' . $i . '_style', 'options'), $i);
        }
        if( get_field('copywriting_border_line','options') && get_field('copywriting_border_color','options') ){
            $coop_border = get_field('copywriting_border_line','options') . 'px solid ' . get_field('copywriting_border_color','options') . ';';
            echo '--kmnd-cooperation-border:' . $coop_border;
        }
        ?>
    }

<?php if($cta_link['cta_css_add_class'] && trim( $cta_link['cta_css_add_class'] ) != '' ) :
    echo '.' . $cta_link['cta_css_add_class']; ?>{
        /* display:inline-block; */
        font-family: var(--kmnd-cta-font-family, inherit);
        font-size: var(--kmnd-cta-font-size , inherit);
        font-weight: var(--kmnd-cta-font-weight , inherit);
        letter-spacing: var(--kmnd-cta-letter-spacing , inherit);
        line-height: var(--kmnd-cta-line-height , inherit);
        color: var(--kmnd-cta-color, inherit);
        background-color: var(--kmnd-cta-background-color, transparent);
        text-decoration: var(--kmnd-cta-text-decoration, none);
        border: var(--kmnd-cta-border , none);
        padding: var(--kmnd-cta-padding, 10);
        margin: var(--kmnd-cta-margin, 10);
        border-radius:var(--kmnd-cta-border-radius, 0);
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        outline: none;
        cursor: pointer;
    }

<?php endif;?>

</style>

<?php

}

if( class_exists('ACF') ){
    add_action( 'wp_head', 'kmnd_root_css', 10 );
    add_action('admin_head', 'kmnd_root_css');
}
