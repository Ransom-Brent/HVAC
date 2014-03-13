<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="row">	
			
		<section class="post" id="post-<?php the_ID(); ?>">

			<article class="entry">
				
				<?php the_content(); ?>
				
				<?php if(is_page('home'))  { ?>
				
					<!-- Homgpage Intro Text -->
					<div class="large-8 medium-8 small-12 columns">
						<?php echo get_field('intro_text'); ?>
					</div>
				
					<!-- Homepage Testimonial Text -->
					<div class="large-4 medium-4 small-12 columns">
						<?php echo get_field('testimonial'); ?>
					</div>
				
					<!-- Homepage Services -->
					<div class="large-4 medium-4 small-6 columns">
						<?php $service_1 = get_field('service_one_image'); if ($service_1): ?>
							<img src="<?php echo $service_1['url']; ?>" alt="<?php echo $service_1['alt']; ?>" />
						<?php endif; ?>
						<?php echo get_field('service_one_text'); ?>
					</div>
					<div class="large-4 medium-4 small-6 columns">
						<?php $service_2 = get_field('service_two_image'); if ($service_2): ?>
							<img src="<?php echo $service_2['url']; ?>" alt="<?php echo $service_2['alt']; ?>" />
						<?php endif; ?>
						<?php echo get_field('service_one_text'); ?>
					</div>
					<div class="large-4 medium-4 small-6 columns">
						<?php $service_3 = get_field('service_three_image'); if ($service_3): ?>
							<img src="<?php echo $service_3['url']; ?>" alt="<?php echo $service_3['alt']; ?>" />
						<?php endif; ?>
						<?php echo get_field('service_one_text'); ?>
					</div>
				
					<!-- Homepage Choose Us Section -->
					<div class="large-12 meduim-12 small-12 columns">
						<h2><?php echo get_field('choose_us_section_title'); ?></h2>
					</div>
				
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_one_text'); ?>
					</div>
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_two_text'); ?>
					</div>
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_three_text'); ?>
					</div>
				
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_four_text'); ?>
					</div>
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_five_text'); ?>
					</div>
					<div class="large-4 meduim-4 small-6 columns">
						<?php echo get_field('choose_us_section_six_text'); ?>
					</div>
				
					<!-- Homepage Logo Span -->
					<div class="logo-span">
				
					</div>
				
			<?php } ?>
				
			</article>

		</section>
		
		<?php endwhile; endif; ?>

			<?php get_sidebar(); ?>

		</div>

<?php get_footer(); ?>
