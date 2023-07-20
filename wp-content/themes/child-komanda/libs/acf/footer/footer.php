<?php
/**
 * footer Block Template.
 */
?>
<div class="container">
	<div class="footer-row">

		<div class="footer-copy">
			<div class="footer-copy-row">

				<img width="56.25" 
					height="45" 
					class="lazyload" 
					src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/img/img-footer1.png">

				<img width="90" 
					height="30" 
					class="lazyload" 
					src="<?php  echo get_stylesheet_directory_uri();?>/assets/img/img-footer2.png">
			
			</div>
			<p><?php the_field('footer_copy');?></p>
		</div>

		<?php if(have_rows('footer_mess')) :?>
			<div class="footer-nav">
				<ul>
					<?php while(have_rows('footer_mess')) : the_row();?>
					<li>
						<a href="<?php the_sub_field('link');?>" class="animated-link"><?php the_sub_field('name');?></a>
					</li>
					<?php endwhile;?>
				</ul>
				<p>
					<?php if(trim(get_field('tel')) !='') :?>
						<a class="animated-link" href="tel:+<?php echo preg_replace('~\D+~','', get_field('tel'));?>"><?php the_field('tel');?></a>
					<?php endif;?>
				</p>
			</div>
		<?php endif;?>

		<div class="footer-soc">
			<?php if(have_rows('footer_soc')) :?>
				<div class="footer-soc-row">
					<?php while(have_rows('footer_soc')) : the_row();?>
						<a href="<?php the_sub_field('link');?>">
							<img src="<?php the_sub_field('img');?>" 
								width="30" 
								height="30" 
								class="lazyload"
								target="_blank"
								rel="nofollow noopener" >
						</a>
					<?php endwhile;?>
				</div>
			<?php endif;?>
			<p>
				<?php if(trim(get_field('email')) !='') :?>	
					<a class="animated-link" href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
				<?php endif;?>
			</p>
		</div>

		<div class="footer-text">
				<p>
					<?php if(trim(get_field('tel')) !='') :?>
						<a class="animated-link" href="tel:+<?php echo preg_replace('~\D+~','', get_field('tel'));?>"><?php the_field('tel');?></a>
					<?php endif;?>
				</p>
			<p>	
				<?php if(trim(get_field('email')) !='') :?>	
					<a class="animated-link" href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
				<?php endif;?>
			</p>

			<p class="footer-text-copy"><?php the_field('footer_copy');?></p>
		</div>
	</div>
</div>