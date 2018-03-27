<?php
/**
 * The template for displaying search results pages.
 *
 * @package startright
 */
get_header();

$startright_featured_image_class = '';
$startright_header_image_style	 = '';
?>
<header class="entry-header <?php echo $startright_featured_image_class; ?>" style="<?php echo $startright_header_image_style; ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'startright' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->

<div class="container">
	<div class="row">

		<div class="col-lg-12 col-md-12">

			<section id="primary" class="content-area">
				<main id="main" class="site-main">

<?php if ( have_posts() ) : ?>


	<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->

		</div>
	</div>
</div>


<?php get_footer(); ?>
