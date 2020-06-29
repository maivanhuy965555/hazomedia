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
	<section class="site-news-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-12 pd-l col-vt">
					<?php dynamic_sidebar('sidebar-2') ?>
				</div>
				<div class="col-xl-9 col-lg-8 col-md-12 pd-r">
					<div class="details-news-text-img">
						<h1 class="title-details"><?php the_title(); ?></h1>
						<div class="list-next-text-top">
							<div class="row">
								<div class="col-md-12">
									<div class="list-date">
										<ul>
											<li><i class="fa fa-calendar-o"></i> <span>Ngày Đăng :  <?php echo get_the_date(); ?></span></li>
											<li><i class="fa fa-eye"></i> <span>Lượt Xem : <?php echo getPostViews(get_the_ID()); ?></span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="text-img-details-news the_content">
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
							<h2>Dịch vụ liên quan</h2>
							<div class="row">
							<?php 
							$the_query = new WP_Query( $args = array(
								'post_type'  => 'dich_vu',
								'posts_per_page' => 3,
								'offset' => 0,  
							) );
							if ( $the_query->have_posts() ) :
								?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-md-4">
									<?php get_template_part( 'template-parts/content', 'services' ); ?>
									</div>
								<?php endwhile; ?>
							<?php endif; 
							?> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
