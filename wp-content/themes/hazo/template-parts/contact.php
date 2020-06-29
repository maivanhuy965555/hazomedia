<?php
/**
Template Name: Liên hệ
 */

get_header();
?>
<main>
	<?php get_template_part( 'template-parts/banner', '' ); ?>
	<section class="site-contact" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/contact.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="site-contact_content">
						<h2><?php the_field('lh_title') ?></h2>
						<div class="descrip">
							<?php the_field('lh_des') ?>
						</div>
						<ul>
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/lh1.png" alt="">
								<div class="text">
									<a href="#" title=""><?php the_field('ft_address','option') ?></a>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/lh2.png" alt="">
								<div class="text">
									<a href="tel:<?php the_field('ft_phone','option') ?>" title=""><?php the_field('ft_phone','option') ?></a>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/lh3.png" alt="">
								<div class="text">
									<a href="mailto:<?php the_field('ft_email','option') ?>" title=""><?php the_field('ft_email','option') ?></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="site-contact_form">
						<h2>Gửi thông tin của bạn</h2>
						<?php echo do_shortcode( '[contact-form-7 id="363" title="Liên hệ"]' ) ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="site-map">
		 <div class="container">
		 	<iframe src="<?php the_field('ft_map','option') ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		 </div>
	</section>
</main>
<?php
get_footer();
