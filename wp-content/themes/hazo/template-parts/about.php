<?php
/**
Template Name: Giới thiệu
 */

get_header();
?>
<main>
	<?php get_template_part( 'template-parts/banner', '' ); ?>
	<section class="main-about-page">
		<div class="container">
			<div class="site-title">
				<p class="text-mo m-0"><?php the_field('a1_dm') ?></p>
				<h2 class="heading"><?php the_field('a1_title') ?></h2>
			</div>
			<div class="description">
				<?php the_field('a1_des') ?>
			</div>
		</div>
	</section>
	<section class="main-about-value">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="text-value">
						<div class="site-title">
							<p class="text-mo m-0"><?php the_field('a2_dm') ?></p>
							<h2 class="heading"><?php the_field('a2_title') ?></h2>
						</div>
						<ul>
						<?php if(have_rows('a2_re')){ ?>
							<?php while(have_rows('a2_re')): the_row(); ?>
								<li><span><strong><?php the_sub_field('a2_re_title') ?></strong> <?php the_sub_field('a2_re_des') ?></span></li>
							<?php endwhile ?>
						<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="img-value">
						<img class="w-100" src="<?php the_field('a2_images') ?>" alt="<?php the_field('a2_images') ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="main-team">
		<div class="container">
			<div class="team-content">
				<div class="site-title">
					<p class="text-mo m-0"><?php the_field('a3_dm') ?></p>
					<h2 class="heading"><?php the_field('a3_title') ?></h2>
				</div>
				<div class="slider-team">
					<div class="description">
						<?php the_field('a3_des') ?>
					</div>
					<?php if(have_rows('a3_re')){ ?>
						<div class="owl-theme sl-team owl-carousel">
							<?php while(have_rows('a3_re')): the_row(); ?>
								<div class="item">
									<img src="<?php the_sub_field('a3_images') ?>" alt="<?php the_sub_field('a3_name') ?>">
									<div class="text-bottom">
										<h3><?php the_sub_field('a3_name') ?></h3>
										<span><?php the_sub_field('a3_chucvu') ?></span>
									</div>
								</div>
							<?php endwhile ?>
						</div>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="main-procedure">
		<div class="container">
			<div class="site-title">
				<p class="text-mo m-0"><?php the_field('a4_dm') ?></p>
				<h2 class="heading"><?php the_field('a4_title') ?></h2>
			</div>
			<?php if(have_rows('a4_re')){ ?>
			<div class="list-procedure">
				<div class="row">
					<?php while(have_rows('a4_re')): the_row(); ?>
						<div class="col-md-3 col-custom-nth">
							<div class="box-procudure">
								<div class="icon">
									<img src="<?php the_sub_field('a4_re_images') ?>" alt="<?php the_sub_field('a4_re_title') ?>">
								</div>
								<h3><?php the_sub_field('a4_re_title') ?></h3>
								<p><?php the_sub_field('a4_re_des') ?></p>
							</div>
						</div>
					<?php endwhile ?>
				</div>
			</div>
			<?php } ?>
			<?php wp_reset_postdata(); ?>
			<div class="morea">
				<a class="btn-custom js-pp" href="javascript:void();" title="">Hãy tư vấn cho tôi</a>
			</div>
		</div>
	</section>
	<section class="main-why">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="site-title">
						<p class="text-mo m-0"><?php the_field('a5_dm') ?></p>
						<h2 class="heading"><?php the_field('a5_title') ?></h2>
					</div>
					<div class="list-icon-ts">
						<?php if(have_rows('a5_re')){ ?>
							<ul>
								<?php while(have_rows('a5_re')): the_row(); ?>
								<li>
									<div class="icon"></div>
									<div class="text">
										<h3><?php the_sub_field('a5_re_title') ?></h3>
										<p><?php the_sub_field('a5_re_des') ?></p>
									</div>
								</li>
								<?php endwhile ?>
							</ul>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="img-why">
						<img src="<?php the_field('a5_images') ?>" alt="<?php the_field('a5_images') ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="site-pane">
		<div class="container">
			<?php if(have_rows('h10_re')){ ?>
				<div class="owl-theme sl-pane owl-carousel">
					<?php while(have_rows('h10_re')): the_row(); ?>
						<div class="item">
							<img src="<?php the_sub_field('h10_images') ?>" alt="<?php the_field('a5_title') ?>">
						</div>
					<?php endwhile ?>
				</div>
			<?php } ?>
		</div>
	</section>
</main>
<?php
get_footer();
