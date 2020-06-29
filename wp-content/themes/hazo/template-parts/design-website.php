<?php
   /**
   Template Name: Thiết kế website
    */
   
   get_header();
   ?>
<main>
   <?php get_template_part( 'template-parts/banner', '' ); ?>
   <section class="h-markettig-1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="h-title-main">
                  <h2 class="h-title"><?php the_field('t1_title') ?></h2>
               </div>
               <div class="list-markettig-1">
                  <div class="row">
                     <div class="col-md-4">
                        <?php if(have_rows('t1_re')){ ?>
                        <?php $i = 0 ?>
                        <?php while(have_rows('t1_re')): the_row(); ?>
                        <?php $i++ ?>
                        <?php if($i%2==1){ ?>
                        <div class="box-markettig-1 text-right">
                           
                           <div class="content-nh"><?php the_sub_field('t1_re_des') ?></div>
                          
                        </div>
                         <?php } ?>
                        <?php endwhile ?>
                        <?php } ?>
                     </div>
                     <?php wp_reset_postdata(); ?>
                     <div class="col-md-4">
                        <div class="img-box-markettig-1">
                           <img class="w-100" src="<?php the_field('t1_images') ?>" alt="<?php the_field('t1_title') ?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <?php if(have_rows('t1_re')){ ?>
                        <?php $i = 0 ?>
                        <?php while(have_rows('t1_re')): the_row(); ?>
                        <?php $i++ ?>
                        <?php if($i%2==0){ ?>
                          <div class="box-markettig-1 text-left">
                             <div class="content-nh"><?php the_sub_field('t1_re_des') ?></div>
                          </div>
                         <?php } ?>
                        <?php endwhile ?>
                        <?php } ?>
                     </div>
                     <?php wp_reset_postdata(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="h-markettig-container">
   		<?php if(have_rows('t2_re_qc')){ ?>
   			<?php while(have_rows('t2_re_qc')): the_row(); ?>
		      <section class="h-benefit_main">
		         <div class="container">
		            <div class="row align-items-center">
		               <div class="col-lg-6">
		                  <div class="benefit_main_list">
		                     <div class="h-title-main text-left">
		                        <h2 class="h-title"><?php the_sub_field('t2_title') ?></h2>
		                        <p><?php the_sub_field('t2_des') ?></p>
		                     </div>
		                     <?php if(have_rows('t2_sub_qc')){ ?>
		                     <ul>
		                     	<?php while(have_rows('t2_sub_qc')): the_row(); ?>
		                        <li>
		                           <img src="<?php the_sub_field('t2_sub_images') ?>" alt="<?php the_sub_field('t2_sub_title') ?>">
		                           <div class="text-benefit">
		                              <h3><?php the_sub_field('t2_sub_title') ?></h3>
		                              <p><?php the_sub_field('t2_sub_des') ?></p>
		                           </div>
		                        </li>
		                       <?php endwhile ?>
		                     </ul>
		                     <?php } ?>
		                     <div class="text-center-mobile">
		                        <a class="h-more js-pp" href="javascript:void()" title="">Yêu cầu tư vấn</a>
		                     </div>
		                  </div>
		               </div>
		               <div class="col-lg-6">
		                  <div class="img-benefit_main">
		                     <img class="w-100" src="<?php the_sub_field('t2_images') ?>" alt="<?php the_sub_field('t2_title') ?>">
		                  </div>
		               </div>
		            </div>
		         </div>
		      </section>
	    	<?php endwhile ?>
	    <?php } ?>
	    <?php wp_reset_postdata(); ?>
   </section>
   <section class="h-main-doitact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="h-title-main">
                  <h2 class="h-title"><?php the_field('t3_title') ?></h2>
               </div>
               <div class="list-logo-doitac">
               	<?php if(have_rows('t3_re')){ ?>
                  <div class="row">
                  	<?php while(have_rows('t3_re')): the_row(); ?>
                     <div class="col-md-3 col-6">
                        <div class="dt-img">
                           <a href="<?php the_sub_field('t3_re_link') ?>" title="<?php the_sub_field('t3_re_link') ?>">
                           <img src="<?php the_sub_field('t3_re_images') ?>" alt="<?php the_sub_field('t3_re_link') ?>">
                           </a>
                        </div>
                     </div>
                     <?php endwhile ?>
                  </div>
                 <?php } ?>
                 <?php wp_reset_postdata(); ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="site-customer h-site-customer">
      <div class="container">
         <div class="site-title">
            <p class="text-mo m-0"><?php the_field('t4_dm') ?></p>
            <h2 class="heading"><?php the_field('t4_title') ?></h2>
            <p class="des"><?php the_field('t4_des') ?>
            </p>
         </div>
         <div class="tab-content" id="list-post">
	         	<?php 
	         	$the_query = new WP_Query( $args = array(
	         		'post_type'  => 'du_an',
	         		'posts_per_page' => 6,
	         		'offset' => 0,  
	         	) );
	         	$countp = $the_query ->found_posts;
	         	if ( $the_query->have_posts() ) :
	         		?>
	         		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	         			<?php get_template_part( 'template-parts/content', 'project' ); ?>
	         		<?php endwhile; ?>
	         	<?php endif; 
	         	?>
         </div>
         	<?php if ($countp > 6) : ?>
         	<script type="text/javascript">
         		jQuery(document).ready(function(){
        ajaxurl = '<?php echo admin_url("admin-ajax.php")?>';
        offset = 6;
        jQuery( "#loadmore" ).click(function() {
            jQuery('#loadmore i').removeClass('hidden');
            jQuery.ajax({
                type:"POST",
                url:ajaxurl,
                data:{"action": "loadmore", 'offset':offset},
                success:function(response)
                {
                    if (response != 'end') {
                        jQuery('#list-post').append(response);
                        offset = offset + 10;
                        jQuery('#loadmore i').addClass('hidden');
                        if (offset >= <?php echo $countp ?>) { 
                            jQuery('#loadmore').addClass('hidden');
                        }
                    }
                }});
        });
    });
         	</script>
         	<div class="text-center">
         		<a class="btn-custom" style="margin:0 auto" id="loadmore" href="javascript:;"><i class="fa fa-spinner fa-spin fa-fw hidden"></i><span>Xem thêm dự án khác</span></a>
         	</div>
         	<?php endif ?>
      </div>
   </section>
   <section class="title-projects">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12">
               <em>Quý khách vui lòng để lại số điện thoại để được tư vấn miễn phí!</em>
            </div>
            <div class="col-md-6">
               <div class="form">
                  <?php echo do_shortcode( '[contact-form-7 id="356" title="Nhập số điện thoại tư vấn"]' ) ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
get_footer();