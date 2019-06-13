<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<?php get_template_part( 'template-parts/blocks/block', 'hero-banner' ); ?>

<div class="wrapper" id="page-wrapper">
	
	<div class="container py-5 my-5 text-center" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title mb-4"><?php esc_html_e( 'That page can&rsquo;t be found.', 'abide' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'OOPS! The page you requested either no longer exists, or more likely has a new location.', 'abide' ); ?></p>
							
						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->


</div><!-- #page-wrapper -->

<?php get_footer(); ?>
