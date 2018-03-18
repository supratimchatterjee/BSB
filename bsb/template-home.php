<?php
/**
 Template Name: Home
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	    <section class="uk-block uk-cover-background" style="background-image:url(<?php echo get_template_directory_uri();?>/asset/images/home-content-bg.jpg)">
			<div class="uk-container uk-container-center">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-medium-5-10 uk-flex uk-flex-center uk-flex-middle">
						<div>
							<h3><?php the_field('left_section_heading');?></h3>
							<hr class="deco-hr uk-hidden-small">
							<div class="uk-text-justify tm-mobile-text-small">
								<?php the_field('left_section_description');?>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-4-10 uk-push-1-10">
						<div class="uk-grid" data-uk-grid-margin="{cls:'uk-margin-top'}">
						<?php if( have_rows('right_section') ): ?>	   
							<?php while( have_rows('right_section') ): the_row(); ?>
							<div class="uk-width-medium-1-2 uk-text-center">
									<?php
									$sf_image = get_sub_field('image');;
									$sf_image  = wp_get_attachment_image_src( $sf_image, array(200,200));
									?>
								<a class="uk-thumbnail" href="<?php the_sub_field('link'); ?>">
									<img src="<?php echo $sf_image[0]; ?>" alt="">
									<div class="uk-thumbnail-caption"><?php the_sub_field('title'); ?></div>
								</a>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
							
							
						</div>
					</div>
				</div>	
			</div>
		</section>
		<section class="uk-block uk-block-large uk-cover-background tm-home-exp" style="background-image:url(<?php echo get_template_directory_uri();?>/asset/images/home-content-1-bg.jpg);">
			<div class="uk-container uk-container-center">
				<div class="uk-grid" data-uk-margin>
					<div class="uk-width-medium-7-10">
						<h3><?php the_field('heading_exp') ?></h3>
						<h4><?php the_field('sub_heading_exp') ?></h4>
						<hr>
						<?php the_field('points', false, false) ?>
					</div>
				</div>
			</div>
		</section>
		<section class="uk-block uk-block-small uk-contrast uk-cover-background uk-margin-remove" style="background-image: url(<?php echo get_template_directory_uri();?>/asset/images/hashtag-background.jpg)">
			<div class="uk-text-center">
				<h3 class="uk-h1"><?php the_field('heading_tag') ?></h3>
			</div>
		</section>
		<section class="gallery-section">
			<div data-uk-slider="{center:true}">
			    <div class="uk-slider-container">
			     <?php $images = get_field('images_tag'); ?>
			    	 <?php if( $images ): ?>
			        <ul class="uk-slider uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5">
				        <?php foreach( $images as $image ): ?>
				        	<?php
                              $sf_image = $image['ID']; 
                              $sf_image  = wp_get_attachment_image_src($sf_image,array(320,285)); 
                              $sf_image = $sf_image[0];
                              ?>

				            <li><img class="uk-width-1-1" src="<?php echo $sf_image; ?>" alt=""></li>
				         <?php endforeach; ?>
			            
			        </ul>
			    	<?php endif;?>
			    </div>
			    <div></div>
			</div>
		</section>


	
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
