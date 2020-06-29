<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ws247
 */

get_header();
?>
<main>
	<section class="site-banner-page d-flex align-items-end justify-content-center" style="background-image: url(<?php the_field('hd_banner_chung','option') ?>);">
		<div class="container">
			<h1 class="title-page"><?php single_cat_title() ?></h1>
			<div class="tab-web">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( );
				}
				?>
			</div>
		</div>
	</section>
	<section class="site-news site-news-page">
		<div class="container">
			<div class="row">
				<?php
         if (have_posts() ) :
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
            	<div class="col-md-4 mg-bottom-ser">
            		<?php get_template_part( 'template-parts/content', 'services' ); ?>
            	</div>
            <?php endwhile; ?>
         <?php endif; 
         ?> 
         <?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="list-number-next-tab">
			<div class="container">
				<ul>
					<?php ws247_pagination() ?>
				</ul>
			</div>
		</div>
	</section>
</main>


<?php
get_footer();
