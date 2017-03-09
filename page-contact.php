<?php 

/* page template: contact */


/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); 
				if ( is_front_page() ) :
    				get_header( 'home' );
				elseif ( is_page( 'Contact' ) ) :
    				get_header( 'contact' );
				else:
    				get_header();
				endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<? //php get_sidebar(); ?>
<?php get_footer(); ?>


