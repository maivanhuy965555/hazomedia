<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ws247
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field('script_head','option') ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
	
	<header class="sticky">
		<section class="header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<div class="header_logo">
							<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							printf ('<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
								get_bloginfo('url'),
								get_bloginfo('description'),
								$image[0]
							);
							?>
							<div class="icon-mobile toggle hc-nav-trigger hc-nav-1">
								<a href="javascript:;"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g>
										<g>
											<path d="M501.333,96H10.667C4.779,96,0,100.779,0,106.667s4.779,10.667,10.667,10.667h490.667c5.888,0,10.667-4.779,10.667-10.667
											S507.221,96,501.333,96z"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M501.333,245.333H10.667C4.779,245.333,0,250.112,0,256s4.779,10.667,10.667,10.667h490.667
											c5.888,0,10.667-4.779,10.667-10.667S507.221,245.333,501.333,245.333z"/>
										</g>
									</g>
									<g>
										<g>
											<path d="M501.333,394.667H10.667C4.779,394.667,0,399.445,0,405.333C0,411.221,4.779,416,10.667,416h490.667
											c5.888,0,10.667-4.779,10.667-10.667C512,399.445,507.221,394.667,501.333,394.667z"/>
										</g>
									</g>
								</svg></a>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="header_menu">
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
						</div>
					</div>
				</div>
			</div>
		</section>
	</header><!-- /header -->