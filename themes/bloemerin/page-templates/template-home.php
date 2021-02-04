<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
	get_template_part('global-templates/hero');
}
?>

	<div class="home-hero-banner-top">
		<div class="container">
<!--			<div class="row align-items-center">
				<div class="col-lg-8">
					<div class="info-holder">
						<div class="title">
							<i class="fa fa-globe"></i>Baking across the globe
						</div>
						<div class="description">
							Hi, I am Erin. I love baking and I have been collecting inspiration from across the four different continents have lived and baked in. I can't wait to share all that have I learnt with you.
						</div>
					</div>
				</div>
				<div class="col-lg-4">
				</div>
			</div>-->
		</div>
		<div class="quote-holder">
			<img class="flour-img-wide" alt="life is better with flour in it" src="<?php echo get_template_directory_uri(); ?>/img/LifeIsBetterNoWords-Xwide.png">
			<div class="bloemerin-quote">
				<p class="dutch">Leven is beter met bloem erin.</p>
			</div>
			<div class="bloemerin-quote">
				<p class="english">Life is better with flour in it.</p>
			</div>
		</div>
	</div>

<?php
get_footer();
