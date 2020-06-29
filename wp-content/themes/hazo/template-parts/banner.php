<section class="site-banner-page d-flex align-items-end" style="background-image: url(<?php the_field('hd_banner_chung','option') ?>);">
	<div class="container">
		<div class="">
			<h1 class="title-page"><?php the_title(); ?></h1>
			<div class="tab-web">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '' );
				}
				?>
			</div>
		</div>
	</div>
</section>