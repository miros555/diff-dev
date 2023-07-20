<?php
/**
 * Product section Block Template.
 */

if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

    echo '<h2>'.$block['data']['description'].'</h2>
    <figure><img src="'.$block['data']['preview_image_help'].'"/></figure>';


else : 
$tag = get_field('tag') ? get_field('tag') : 'h2';
$title = get_field('title');
?>

<section class="block-head">
	<svg class="head-bg-mobile" width="320" height="554" viewBox="0 0 320 554" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#a432123)"><path d="M-43.601 342.29C39.5 400.279 10.5 312.361 152.5 355.5 294.5 398.639 254.756 248.698 314 237c78.5-15.5 82.685-46.655 108.669-129.604 55.496-177.158-207.438-412.583-294.94-369.109C40.227-218.24-155.923 263.911-43.601 342.29Z" fill="#fff"/></g><defs><filter id="a432123" x="-257.421" y="-436.968" width="867.709" height="990.242" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="10"/><feGaussianBlur stdDeviation="90"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_81_139"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_81_139" result="shape"/></filter></defs></svg>
	<svg class="head-bg1" width="1060" height="919" viewBox="0 0 1060 919" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#a123321)"><path d="M842-25c76 201.5 16.354 188-14 378.5C797.645 544 631 495.734 540 564c-109.359 82.038-117.5 155-281 164-349.195 19.222-657.198-569.985-537.264-709.607C-158.33-121.229 770.338-215 842-25Z" fill="#fff"/></g><defs><filter id="a123321" x="-484.654" y="-302.021" width="1543.69" height="1220.48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="10"/><feGaussianBlur stdDeviation="90"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_72_8"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_72_8" result="shape"/></filter></defs></svg>
	<svg class="head-bg2" width="601" height="909" viewBox="0 0 601 909" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#a112233)"><path d="M585.519 139.892c-125.337-16.397-142.176 75.698-241.103 123.01-80.195 24.035-158.124 91.413-163.317 163.262-6.248 86.458 57.728 120.337 154.654 172.665 43.73 23.608 38.036 78.029 127.83 114.328 134.521 54.379 427.896-129.295 393.925-229.547-33.972-100.251-146.651-327.321-271.989-343.718Z" fill="#fff"/></g><defs><filter id="a112233" x=".679" y="-37.039" width="1039.55" height="945.057" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="5"/><feGaussianBlur stdDeviation="90"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_72_18"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_72_18" result="shape"/></filter></defs></svg>
	<div class="container">
        <?php if(get_field('top_mob_img')) : ?>
		    <img class="img-top-main-mobile" src="<?php the_field('top_mob_img');?>">
        <?php endif;?>
		<div class="head-row">
			<div class="head-content">

                <?php printf('<%s class="title-primary">%s</%s>', $tag, $title, $tag);?>
                <p><?php the_field('descr');?></p>

                <?php if(get_field('product_mob_img')) : ?>
                    <img class="img-header-mobile"  width="320" height="594" src="<?php the_field('product_mob_img');?>">
                <?php endif;?>

                <?php if(get_field('product_link')) :?>
                    <a href="<?php the_field('product_link');?>" class="btn-primary cta_link">
                        <span><?php the_field('product_link_text');?></span>
                        <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.698 8.707a1 1 0 0 0 0-1.414L19.334.929a1 1 0 0 0-1.414 1.414L23.577 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364ZM.991 9h24V7h-24v2Z" fill="#fff"/>
                        </svg>
                    </a>
                <?php endif;?>
			</div>

			<div class="head-image-new">
                <?php if(get_field('product_desct_img')) : ?>
                    <img src="<?php the_field('product_desct_img');?>">
                </div>
            <?php endif;?>
		</div>
	</div>
</section>

<?php
endif;