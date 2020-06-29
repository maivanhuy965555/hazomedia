<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ws247
 */

?>

<footer>
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer_list mg-b30">
						<h3>Thông tin liên hệ</h3>
						<ul>
							<li><a href="#"><?php the_field('ft_address','option') ?></a></li>
							<li><a href="#"><?php the_field('ft_email','option') ?></a></li>
							<li><a href="#"><?php the_field('ft_mst','option') ?></a></li>
							<li><a href="#"><?php the_field('ft_phone','option') ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
					<?php if(have_rows('ft_menu','option')){ ?>
						<?php while(have_rows('ft_menu','option')): the_row(); ?>
							<div class="col-lg-4 col-md-6">
								<div class="footer_list mg-b30">
									<h3><?php the_sub_field('ft_title') ?></h3>
									<?php if(have_rows('ft_list_menu')){ ?>
										<ul>
											<?php while(have_rows('ft_list_menu')): the_row(); ?>
												<li><a href="<?php the_sub_field('ft_c_link') ?>"><?php the_sub_field('ft_c_title') ?></a></li>
											<?php endwhile ?>
										</ul>
									<?php } ?>
								</div>
							</div>
						<?php endwhile ?>
					<?php } ?>
					</div>
				</div>
			</div>
			<div class="row contact-footer align-items-center">
				<div class="col-md-4">
					<div class="logo">
						<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						printf ('<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							$image[0]
						);
						?>
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-footer">
						<form action="<?php echo home_url()?>" method="get">
							<input class="form-control" type="text" placeholder="Nhập email của bạn" name="s">
							<button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bct text-center">
						<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/icon/bct.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="ft-bottom">
			<span><?php the_field('ft_coppyright','option') ?></span>
		</div>
	</section>
</footer>
<section>

	<section class="pp-content-footer">
		<section class="popup">
			<span class="js-times times"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
			<p class="popup__title">Hotline tư vấn</p>
			<p class="popup__phone">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/phone.svg" alt="">
				<a href="tel:<?php the_field('ft_phone','option') ?>" title="<?php the_field('ft_phone','option') ?>"><?php the_field('ft_phone','option') ?></a>
			</p>
			<p class="popup__reminder">Hoặc để lại số điện thoại để chúng tôi gọi lại trong ít phút</p>
			<?php echo do_shortcode( '[contact-form-7 id="365" title="Tư vấn"]' ) ?>
		</section>
	</section>

	<!-- SCROLL -->
	<div class="scroll-top">
		<a href="javascript:;"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	</div>

		<!-- Button Group -->
	<div class="fixedButton"> 
		<a class="fixedButton__phone" href="tel:0123456789">
			<i class="fa fa-phone" aria-hidden="true"></i><span>Gọi ngay<br>0123456789</span>
		</a> 
		<a class="fixedButton__price" data-fancybox="" data-src="#popup_form_fixed" href="">
			<i class="fa fa-envelope" aria-hidden="true"></i><span class="">Báo Giá</span>
		</a> 
		<a class="fixedButton__aboutUs" href="" target="_blank">
			<i class="fa fa-download" aria-hidden="true"></i><span>Về chúng tôi</span>
		</a>
		<div class="fixedButton__social-media"> 
			<b class="social-media__btn"></b> 
			<a class="zalo" href="" target="_blank"></a> 
			<a class="messenger" href="" target="_blank"></a>
		</div>
	</div>
	<!-- End Button Group -->
	
	<!-- Fixed Button Mobile -->
	<div class="fixedButton-mobile">
		<div class="contact">
			<i class="fa fa-commenting-o"></i>
			<p>Liên hệ</p>
		</div>
		<div class="animation"></div>
	</div>
	<!-- End Fixed Button Mobile -->

	<!-- List Contact Mobile -->
	<div class="list__contact-mobile">
		<ul>
			<li>
				<a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-phone.png" alt=""> 
				<span>Gọi ngay <br> 0123456789 </span> </a>
			</li>
			<li>
				<a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-mess.png" alt=""> 
				<span>Chat qua Messenger</span> </a>
			</li>
			<li>
			<a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-zalo.png" alt=""> 
				<span>Chat qua Zalo</span> </a>
			</li>
			<li>
			<a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-mail.png" alt=""> 
				<span>Đăng ký nhận báo giá</span> </a>
				</li>
		</ul>
	</div>
	<!-- End List Contact Mobile -->

	<!-- Fancybox price -->
		<section id="popup_form_fixed" class="popup__price">
			<h1 class="title">Đăng ký nhận tư vấn</h1>
			<form action="">
				<div class="name form__item">
					<input class="form-control" type="text" name="" id="" placeholder="Họ và tên(*)">
				</div>
				<div class="phone form__item">
					<input class="form-control" type="number" name="" id="" placeholder="Số điện thoại(*)">
				</div>
				<div class="email form__item">
					<input class="form-control" type="email" name="" id="" placeholder="Email(*)">
				</div>
				<select class="" name="" id="">
					<option value="" checked="">Dịch vụ bạn cần tư vấn</option>
				</select>
				<button class="form-control">Gửi ngay</button>
			</form>
		</section>
	<!-- End Fancybox price -->

	<!-- Menu-Mobile -->
	<div class="wrapper cf">
		<nav id="main-nav">
			<ul>
				<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'container'       => '__return_false',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '%3$s',
					'depth'           => 3,
				) );
				?>
			</ul>
		</nav>
	</div>
</section>

<?php the_field('script_body','option') ?>
<?php wp_footer(); ?>

</body>
</html>
