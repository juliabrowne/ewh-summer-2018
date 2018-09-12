<?php
/**
 * Template Name: Page With Banner
 *
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="page-with-banner">

			<?php if ( has_post_thumbnail() ) ?>
				<div class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<h1 class="page-with-title"> <?php the_title(); ?> </h1>
				<div class="page-with-subtitle"><?php echo CFS()->get('subtitle'); ?></div>
				<button class="page-with-button"><?php echo CFS()->get('button'); ?></button>
				</div>
				
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>