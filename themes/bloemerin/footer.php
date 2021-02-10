<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="footer-testimonial">
		<div class="container">
			<div class="testimonial">
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="quote">
					"We had our wedding and Erin baked the most beautiful and delicious wedding cake for our special day and I just couldn't have been happier."
				</div>
				<div class="author">Sally, Facebook Review</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="footer-contact-info">
			<div class="row">
				<div class="col-lg-4">
					<div class="title">Want to get in contact?</div>
					<div class="description">
						<p>If you would like to get in contact with Erin, please fill out this contact form.</p>
					</div>
					<div class="contact-info">
						<i class="fa fa-phone"></i>
						<i class="fa fa-envelope-o"></i>
						phone and email...probs wont actually have this??
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-holder">
						<?php echo do_shortcode('[contact-form-7 id="17" title="Contact Form"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			<p>Copyright &#169 Bloemerin 2021 	<span>//</span>	 <a href="#">Terms & Conditions</a> 		<span>//</span> Website by Emma Wishart</p>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

