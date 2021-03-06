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

<div class="wrapper" id="page-wrapper">
	
	<?php get_template_part( 'template-parts/blocks/block', 'hero-banner-home' ); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
