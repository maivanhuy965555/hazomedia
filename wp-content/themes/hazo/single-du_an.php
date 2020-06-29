<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ws247
 */

get_header();
?>

<main>
	<?php get_template_part( 'template-parts/banner', '' ); ?>
	<section class="single-project">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="single-project_content">
						<div class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
						<h1><?php the_title(); ?></h1>
						<p><?php
						while ( have_posts() ) :
							the_post();
							echo wp_trim_words( get_the_content(), 50, '...' );
						endwhile;
						?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="cn-customer">
						<h2><?php the_field('da_title') ?></h2>
						<div class="customer">
							<?php the_field('da_des') ?>
						</div>
						<div class="website">Xem trang web: <a target="_blank" href="<?php the_field('da_website') ?>" title="<?php the_field('da_website') ?>"><?php the_field('da_website') ?></a></div>
						<div class="share">
							<span>Chia sẻ: </span>
							<div class="mxh">
								<a target="_blank" href="<?php the_field('da_facebook') ?>" title="<?php the_field('da_facebook') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a target="_blank" class="d-felx align-items-center justify-content-center" href="<?php the_field('da_zalo') ?>" title="<?php the_field('da_facebook') ?>"><img style="width:80%;" src="<?php echo get_template_directory_uri() ?>/assets/images/icon/icon-zalo.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="site-news-page">
		<div class="container">
			<div class="details-news-text-img">
				<div class="text-img-details-news text-center the_content">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
					<?php wp_reset_postdata(); ?>
					<h3 class="text-right">Viết bài: <?php the_author(); ?></h3>
				</div>
				<div class="list-sk-lq">
					<h2>Dự án liên quan</h2>
					<div class="row">
						<?php 
						$the_query = new WP_Query( $args = array(
							'post_type'  => 'du_an',
							'posts_per_page' => 3,
							'offset' => 0,  
						) );
						if ( $the_query->have_posts() ) :
							?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="col-md-4">
									<?php get_template_part( 'template-parts/content', 'project' ); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; 
						?> 
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
