<?php
/**
 Template Name: Child Page
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<section class="newpatients uk-block standard-page" style="background-color:#f4f4f4;">
		<div class="uk-container uk-container-center">
			<div class="uk-grid" data-uk-margin>
				<div class="uk-width-medium-3-12">					
					<ul class="uk-list">
						<li class="uk-active">
							<a href="#">OUR DIFFERENCE</a>
						</li>
						<li>
							<a href="#">YOUR FIRST VISIT</a>
						</li>
						<li>
							<a href="#">INSURANCE</a>
						</li>
						<li>
							<a href="#">PAYMENT CHOICES</a>
						</li>
						<li>
							<a href="#">NON-DISCRIMINATION POLICIES</a>
						</li>											
					</ul>
				</div>
				<div class="uk-width-medium-9-12">
				<?php $headline    = get_field( 'headline' ); ?>
            	<?php $subheadline = get_field( 'subheadline' ); ?>
					<div class="uk-width-medium-8-10">
						<h3><?php if ($headline) : echo $headline; else: the_title(); endif; ?></h3>
						<?php if ($subheadline) : ?>
						<h4><?php echo $subheadline; ?></h4>
						<?php endif; ?>
					</div>
					<hr>
					<div class="tm-content-part">
						<?php the_content(); ?>	
					</div>
					
					
				</div>
			</div>
		</div>
	</section>	

	    
	
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
