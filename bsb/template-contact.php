<?php
/**
Template Name: Contact
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>	
 	<section class="contact uk-block">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-7-10">
					<h2><?php the_title();?></h2>
					<hr>
					|<?php the_content();?>	
				</div>
				<div class="uk-width-medium-3-10">
					<?php the_field('info_con');?>	
                    
                    <?php $fl_con = get_field('facebook_link_con');?>
                    <?php $inst_con = get_field('instagram_link_con');?>
                    <?php $twtr_con = get_field('twiter_link_con');?>
                    <?php $linkdin_con = get_field('linkedin_link_con');?>				
					<ul>
						<li class="uk-display-inline">
							<?php if($fl_con):?><a href="<?php echo $fl_con;?>"><img src="https://placeholdit.imgix.net/~text?txtsize=33&w=30&h=28" alt=""></a><?php endif;?></li>
						<li class="uk-display-inline">
							<?php if($inst_con):?><a href="<?php echo $inst_con;?>"><img src="https://placeholdit.imgix.net/~text?txtsize=33&w=30&h=28" alt=""></a><?php endif;?>
						</li>
						<li class="uk-display-inline">
							<?php if($twtr_con):?><a href="<?php echo $twtr_con;?>"><img src="https://placeholdit.imgix.net/~text?txtsize=33&w=30&h=28" alt=""></a><?php endif;?>
						</li>
						<li class="uk-display-inline">
							<?php if($linkdin_con):?><a href="<?php echo $linkdin_con;?>"><img src="https://placeholdit.imgix.net/~text?txtsize=33&w=30&h=28" alt=""></a><?php endif;?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
 <?php endwhile;?>
 <?php endif;?>
	
<?php
get_footer();
