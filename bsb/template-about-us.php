<?php
/**
	Template Name: About Us
 */

get_header(); ?>

	<section class="about-us uk-block">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-1-3">
					<img src="<?php the_field('image_about');?>" alt="">
				</div>
				<div class="uk-width-medium-2-3">
					<h2><?php the_field('title_about');?></h2>
					<hr>
					<h4><?php the_field('name_doc');?></h4>
					<p><?php the_field('description_about');?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="our-team uk-block" style="background-image:url(asset/images/bg2.jpg); background-position: bottom center;">
		<div class="uk-container uk-container-center">
			<h2><?php the_field('our_team_heading');?></h2>
			<div class="uk-grid" data-uk-grid-margin>
            <?php $i=1;?>
            	<?php if(have_rows('team')):?>
                <?php while(have_rows('team')):the_row();?>
                <?php if ($i<=4):?>
					<div class="uk-width-medium-1-3 uk-grid-margin">
                    <?php else:?>
                    <div class="uk-width-medium-1-3">
                    <?php endif;?>
					<div class="uk-panel uk-panel-box">
						<div class="uk-panel-teaser uk-visible-small">
							<img src="http://lorempixel.com/400/400/people/9/" alt="">
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-2">
								<h4><?php the_sub_field('name_team');?></h4>
							</div>
							<div class="uk-width-1-2 uk-text-right">
								<span class=""><?php the_sub_field('possition_team');?></span>
							</div>
						</div>
						<hr>
						<p><?php the_sub_field('content_team');?></p>
					</div>
				</div>
                <?php $i++;?>
                <?php endwhile;?>
                <?php endif;?>
			</div>
		</div>
	</section>
	<section class="">		
		<img class="uk-width-1-1" src="http://lorempixel.com/1920/500/nature/" width="" height="" alt="">			
	</section>
	<section class="our-approach uk-block uk-padding-remove">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-large-6-10">
                <div class="offset-caption uk-height-1-1 uk-flex uk-flex-middle">
					<div class="uk-width-6-10">
						<h2><?php the_field('title_aprch');?></h2>
						<p><?php the_field('description_aprch');?></p>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-4-10" style="background:url(<?php echo get_template_directory_uri();?>/asset/images/bg3.jpg) no-repeat 0 0 / cover; ">
				<div class="uk-overlay">
				<img src="<?php echo get_template_directory_uri();?>/asset/images/bg3.jpg">
					<div class="uk-overlay-panel uk-overlay-background">
						<div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
							
								
								<?php if(have_rows('testimonial_about')):?>
                                <ul class="uk-slideshow">
                                <?php while(have_rows('testimonial_about')):the_row();?>
                                <li>
									<div class="uk-width-5-10">
										<h3><?php the_sub_field('title_testimonial');?></h3>
										<p><?php the_sub_field('description_about_test');?></p>
									</div>
                                 </li>
                                 <?php endwhile;?>
                                 </ul>	
                                 <?php endif;?>   
											
							<ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
								<li data-uk-slideshow-item="0"><a href=""></a></li>
								<li data-uk-slideshow-item="1"><a href=""></a></li>
							</ul>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

<?php
get_footer();
