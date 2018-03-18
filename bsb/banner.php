
<?php 
 global $post;
 $current_post_id = $post->ID;
 ?>
 <?php $banner = get_field('banner_img',$current_post_id ) ?> 
 <?php $banner_text = get_field('banner_text', false, false,$current_post_id ) ?> 
 <?php $button_label = get_field('button_label',$current_post_id ) ?> 
 <?php $button_link = get_field('button_link',$current_post_id ) ?> 

		<section class="site-banner">		
			<figure class="uk-overlay uk-display-block">
				<img class="uk-width-1-1" src="<?php echo $banner;?>" width="" height="" alt="">
				<figcaption class="uk-position-cover uk-flex uk-flex-middle uk-container uk-container-center">
					<div>
						<?php if($banner_text):?>
						<h1><?php echo $banner_text;?></h1>
						<?php endif; ?>

						<?php if($button_label & $button_link):?>
						<a class="uk-button uk-button-primary uk-hidden-small" href="<?php echo $button_link;?>"><?php echo $button_label;?></a>
						<?php endif; ?>
					</div>
				</figcaption>
			</figure>	
		</section>