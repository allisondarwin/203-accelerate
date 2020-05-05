<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<section class="page-not-found-content">
        <h1>404 Error: Page Not Found!</h1>
        <h2>Whoops, took a wrong turn...</h2>
        <p>Sorry, this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to look around our <a href="<?php echo site_url('/blog/') ?>"><span>blog</span></a> or some of our <a href="<?php echo site_url('/case-studies/') ?>"><span>work</span></a>.</p>
      </section>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
