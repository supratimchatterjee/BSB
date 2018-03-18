<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Broad_Street_Braces
 */

?>

		<section class="footer uk-block uk-contrast" style="background-color:#2e3092;">
			<div class="uk-container uk-container-center">
				<div class="uk-grid custom-underline" data-uk-margin>
					<div class="uk-width-medium-4-10">
						<h6 class=""><?php the_field('instagram_heading','option');?></h6>
                        <?php if(have_rows('instagram_ftr','option')):?>
                        
						<div class="instag-gallery">
                        <?php while(have_rows('instagram_ftr','option')):the_row();?>
								<div><img src="<?php the_sub_field('images_inst_ftr');?>"></div>
								<?php endwhile;?>
						</div>
                        
                        <?php endif;?>
					</div>
					<div class="uk-width-medium-6-10">
						<div class="uk-grid">
							<div class="uk-width-medium-6-10">
								<h6>info</h6>
								<div class="uk-width-medium-7-10 uk-text-justify">
									<?php the_field('info_footer','option');?>
								</div>
							</div>
							<div class="uk-width-medium-4-10 contact-panel">
								<h6>contact us</h6>
								<div>
									<div class="address">
										<span class="uk-display-block uk-text-uppercase">address</span>
										<p><?php the_field('address_footer','option');?></p>
									</div>
									<div class="phone">
										<span class="uk-display-block uk-text-uppercase">call us 24/7</span>
										<p><a href="#"><?php the_field('phone_number_footer','option');?></a></p>
									</div>
									<div class="mail">
										<span class="uk-display-block uk-text-uppercase">email us</span>
										<p><a href="#"><?php the_field('email_footer','option');?></a></p>
									</div>
									<div class="time">
										<span class="uk-display-block uk-text-uppercase">opening hours</span>
										<p><?php the_field('opening_hours_footer','option');?></p>
									</div>
                                    <?php $f_link = get_field('facebook_link','option');?>
                                    <?php $i_link = get_field('instagram_link','option');?>
                                    <?php $t_link = get_field('twiter_link','option');?>
                                    <?php $l_link = get_field('linkedin_link','option');?>
									<div class="social-media">
										<?php if ($f_link):?><a href="<?php echo $f_link;?>"><img src="<?php echo get_template_directory_uri();?>/asset/images/facebook-icon.png" alt=""></a><?php endif;?>
										<?php if ($i_link):?><a href="<?php echo $i_link;?>"><img src="<?php echo get_template_directory_uri();?>/asset/images/instagram-icon.png" alt=""></a><?php endif;?>									
										<?php if ($t_link):?><a href="<?php echo $t_link;?>"><img src="<?php echo get_template_directory_uri();?>/asset/images/twitter-icon.png" alt=""></a><?php endif;?>						
										<?php if ($l_link):?><a href="<?php echo $l_link;?>"><img src="<?php echo get_template_directory_uri();?>/asset/images/linkedin-icon.png" alt=""></a><?php endif;?>									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="copy-right">
			<div class="uk-text-center">
				<span>&copy; 2017 All right reserved</span>
			</div>
		</section>

<?php wp_footer(); ?>

</body>
</html>
