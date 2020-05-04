<?php
/**
 * Template name: About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

  <section class="services">
    <div class="site-content">
      <h4>Our Services</h4>
      <p class="services-intro">We take pride in our clients and the services we offer them. Here's a brief overview of our offered services.</p>
			<div class = services-content>
				<?php query_posts('post_type=services'); ?>
					<?php while ( have_posts() ) : the_post();
						$description = get_field('description');
						$image = get_field('image');
						$size = 'medium';?>
						<article class="individual-service">
							<figure class="service-image">
								<?php echo wp_get_attachment_image($image, $size); ?>
							</figure>
							<div class="service-details">
									<h3><?php the_title(); ?></h3>
									<p><?php echo $description; ?></p>
							</div>
						</article>
					<?php endwhile; ?>
				<?php wp_reset_query(); //resets the altered query back to the original ?>
			</div>
		</div>
  </section>

	<section class="call-to-action site-content">
			<h4>Interested in working with us?</h4>
			<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</section>

<?php get_footer(); ?>
