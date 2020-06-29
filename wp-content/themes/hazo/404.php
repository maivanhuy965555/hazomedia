<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ws247
 */

get_header();
?>
<section class="error-404 not-found w-100">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oops! Trang của bạn dường như không thể tìm thấy.', 'ws247' ); ?></h1>
	</header><!-- .page-header -->
	<div class="page-content">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error-404.png" alt="404">
		<a class="ws-button" href="<?php echo get_home_url() ?>">
			Quay lại trang chủ
		</a>
	</div><!-- .page-content -->
	
</section><!-- .error-404 -->
<?php
get_footer();
