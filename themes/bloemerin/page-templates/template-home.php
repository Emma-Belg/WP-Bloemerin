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
		<div class="home-carousel">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100"
							 src="<?php echo get_template_directory_uri(); ?>/img/recipes/david-holifield-kPxsqUGneXQ-unsplash.jpg"
							 alt="First slide">
						<div class="carousel-caption d-md-block">
							<h5>Super Chocolate Cake</h5>
							<p>filler text about the Super Chocolate Cake...</p>
							<a href="#" class="btn btn-primary">See Recipe</a>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100"
							 src="<?php echo get_template_directory_uri(); ?>/img/recipes/mike-meeks-zk-fclJdGas-unsplash.jpg"
							 alt="Second slide">
						<div class="carousel-caption d-md-block">
							<h5>Cupcakes</h5>
							<p>filler text about Cupcakes...</p>
							<a href="#" class="btn btn-primary">See Recipe</a>
						</div>
						<!--					<img class="d-block w-100" src="img/recipes/mike-meeks-zk-fclJdGas-unsplash.jpg" alt="Second slide">-->
					</div>
					<div class="carousel-item">
						<img class="d-block w-100"
							 src="<?php echo get_template_directory_uri(); ?>/img/recipes/david-holifield-sCsjtUwN8LA-unsplash.jpg"
							 alt="Third slide">
						<div class="carousel-caption d-md-block">
							<h5>Wedding Cake</h5>
							<p>filler text about a wedding cake...</p>
							<a href="#" class="btn btn-primary">See Recipe</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="quote-holder">
			<img class="flour-img-wide" alt="life is better with flour in it"
				 src="<?php echo get_template_directory_uri(); ?>/img/LifeIsBetterNoWords-Xwide.png">
			<div class="bloemerin-quote">
				<p class="dutch">Leven is beter met Bloemerin.</p>
			</div>
			<div class="bloemerin-quote">
				<p class="english">Life is better with flour in it.</p>
			</div>
		</div>

		<div class="quote-holder">
			<div class="home-product-info-background-underlay">
				<div class="container">
					<div class="home-special-offer">
						<div class="bloemerin-quote">
							<p class="dutch">Leven is beter met Bloemerin.</p>
						</div>
						<div class="bloemerin-quote">
							<p class="english">Life is better with flour in it.</p>
						</div>
					</div>
					<img class="illustration-to-invert" src="<?php echo get_template_directory_uri(); ?>/img/flourishIllustrations/baking-ingredients-32002_1280.png">
				</div>
			</div>
		</div>

		<div class="info-holder-background-underlay">
			<div class="container-info">
				<div class="info-holder">
					<div class="title">
						<i class="fa fa-globe"></i>Baking across the globe
					</div>
					<div class="description">
						Hi, I am Erin. I love baking and I have been collecting inspiration from across the four
						different continents have lived and baked in. I can't wait to share all that have I learnt
						with you.
						<br/>
						<a href="#" class="btn btn-secondary">Baking Abroad</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-product-info">
		<div class="home-product-info-background-underlay">
			<div class="container">
				<div class="home-special-offer">
					<div class="discount-circle">
						<div class="save">
							Want
							<div class="highlight-word">
								Erin's Baking in
							</div>
							your inbox?
						</div>
					</div>
					<div class="entry-content">
						<div class="title">Sign up to the newsletter</div>
						<div class="desc">Get delicious baking recipes in your inbox once a month... More info maybe not sure...
							just filler text
						</div>
						<a href="#" class="button"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
