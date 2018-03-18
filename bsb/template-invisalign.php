<?php
/**
 Template Name: Invisalign
 */

get_header(); ?>

	
	<section class="invisaling standard-page uk-block" style="background-color:#f4f4f4;">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-3-12">
					
				</div>
				<div class="uk-width-medium-9-12">
					<h2><?php the_field('invisalign_title');?></h2>	
					<hr>
				</div>				
			</div>
            <?php if(have_rows('invisalign')):?>
            <?php while(have_rows('invisalign')):the_row();?>
				<div class="uk-grid">
				<div class="uk-width-medium-3-12">
					<img src="<?php the_sub_field('image_in');?>" alt="">	
				</div>
				<div class="uk-width-medium-9-12">
					<h4><?php the_sub_field('sub_heading_in');?></h4>
					<p><?php the_sub_field('description_in');?></p>
				</div>				
			</div>
			<?php endwhile;?>
            <?php endif;?>
		</div>
	</section>	

<?php
get_footer();
