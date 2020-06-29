<?php
   /**
   
   Template Name: Home
   
    */
   
   
   
   get_header();
   
   ?>
<main>
   <section class="site-banner" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/banner.png);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5">
               <div class="site-banner_text">
                  <h1 class="wow fadeInDown" data-wow-delay=".25s" data-wow-duration="1s"><?php the_field('h1_title') ?></h1>
                  <div class="description wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">
                     <?php the_field('h1_des') ?>
                  </div>
                  <a class="btn-custom wow fadeInDown js-pp" data-wow-delay=".75s" data-wow-duration="1s" href="javascript:void(0)" title="<?php the_field('h1_title') ?>"><span>Đăng ký tư vấn</span></a>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="site-banner_images">
                  <img src="<?php the_field('h1_images') ?>" alt="<?php the_field('h1_title') ?>">
               </div>
            </div>
         </div>
      </div>
      <div class="home-shape">
         <div class="shape1">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/i2.png" alt="shape">
         </div>
         <div class="shape2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/i2.png" alt="shape">
         </div>
         <div class="shape3">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/i3.png" alt="shape">
         </div>
         <div class="shape4">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/i4.png" alt="shape">
         </div>
         <div class="shape5">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/i5.png" alt="shape">
         </div>
      </div>
   </section>
   <section class="has-background">
      <div class="site-marking" >
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <div class="site-banner_images">
                     <img src="<?php the_field('h2_images') ?>" alt="<?php the_field('h1_title') ?>">
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="site-banner_text">
                     <h2 class="wow fadeInDown" data-wow-delay=".25s" data-wow-duration="1s"><?php the_field('h2_title') ?></h2>
                     <div class="description wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">
                        <?php the_field('h2_des') ?>
                     </div>
                     <a class="btn-custom wow fadeInDown js-pp" data-wow-delay=".75s" data-wow-duration="1s" href="javascript:void()" title="<?php the_field('h2_title') ?>"><span>Đăng ký tư vấn</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site-services" >
         <div class="container">
            <div class="site-title">
               <p class="text-mo m-0"><?php the_field('h3_dm') ?></p>
               <h2 class="heading wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php the_field('h3_title') ?></h2>
               <p class="des wow fadeInDown" data-wow-delay=".75s" data-wow-duration="1s"><?php the_field('h3_des') ?>
               </p>
            </div>
            <div class="row">
               <?php 
                  $the_query = new WP_Query( $args = array(
                   'post_type'  => 'dich_vu',
                   'posts_per_page' => 3,
                   'offset' => 0,  
                  ) );
                  $countp = $the_query ->found_posts; 
                  if ( $the_query->have_posts() ) :
                    ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <div class="col-md-4">
                  <?php get_template_part( 'template-parts/content', 'services' ); ?>
               </div>
               <?php endwhile; ?>
               <?php endif; 
                  ?>
               <?php wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
      <div class="site-customer">
         <div class="container">
            <div class="site-title">
               <p class="text-mo m-0"><?php the_field('h4_dm') ?></p>
               <h2 class="heading"><?php the_field('h4_title') ?></h2>
               <p class="des"><?php the_field('h4_des') ?>
               </p>
            </div>
            <div class="nav-top">
              <?php 
              $terms = get_field('h4_re_lv');
              if( $terms ): ?>
                <ul class="nav justify-content-center" id="filters">
                  <?php $i = 0 ?>
                  <?php $filter = ''; ?>
                  <?php while(have_rows('h4_re_lv')): the_row(); ?>
                    <?php $i++ ?>
                    <?php 
                    $filter .= ".web-".$i.', ' ?>
                  <?php endwhile; ?>
                  <li>
                   <span class="filter filter-btn active active2" data-filter="<?php echo $filter ?>">
                     Tất cả
                   </span>
                  </li>
                  <?php $i = 0; ?>
                  <?php foreach( $terms as $term ): ?>
                    <?php $i++; ?>
                    <li>
                      <span class="filter filter-btn" data-filter=".web-<?php echo $i ?>"><?php echo esc_html( $term->name ); ?></span>
                    </li>
                  <?php endforeach; ?>
               </ul>
              <?php endif; ?>
               <?php wp_reset_postdata(); ?>
            </div>
            <div class="tab-content" id="portfoliolist">
               <?php 
                  $the_query = new WP_Query( $args = array(
                   'post_type'  => 'du_an',
                   'posts_per_page' => 6,
                   'offset' => 0,  
                  ) );
                  $countp = $the_query ->found_posts; 
                  if ( $the_query->have_posts() ) :
                    ?>
               <?php $i = 0; ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <?php $i++ ?>
               <div class="portfolio all web-<?php echo $i ?>" data-cat="web-<?php echo $i ?>">
                  <?php get_template_part( 'template-parts/content', 'project' ); ?>
               </div>
               <?php endwhile; ?>
               <?php endif; 
                  ?> 
               <?php wp_reset_postdata(); ?>
            </div>
            <div class="morea">
               <a class="btn-custom" href="<?php the_field('h4_link') ?>"><span>Xem thêm dự án khác</span></a>
            </div>
         </div>
      </div>
      <div class="site-solution">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <div class="site-solution_content">
                     <div class="site-banner_text">
                        <h2><?php the_field('h5_title') ?>
                        </h2>
                        <p><?php the_field('h5_des') ?></p>
                     </div>
                     <?php if(have_rows('h5_repe')){ ?>
                     <div class="solution">
                        <ul>
                           <?php while(have_rows('h5_repe')): the_row(); ?>
                           <li>
                              <img src="<?php the_sub_field('h5_re_images') ?>" alt="<?php the_sub_field('h5_re_des') ?>">
                              <span class="counter"><?php the_sub_field('h5_re_number') ?></span>
                              <p><?php the_sub_field('h5_re_des') ?></p>
                           </li>
                           <?php endwhile ?>
                        </ul>
                     </div>
                     <?php } ?>
                     <?php wp_reset_postdata(); ?>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="site-banner_images">
                     <img class="w-100" src="<?php the_field('h5_images') ?>" alt="<?php the_field('h5_title') ?>">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site-why-choose">
         <div class="text-center">
            <span class="line"></span>
         </div>
         <div class="container">
            <div class="site-title">
               <h2 class="heading m-0"><?php the_field('h6_title') ?></h2>
               <p class="des"><?php the_field('h6_des') ?></p>
            </div>
            <div class="site-why-choose_list">
               <div class="row">
                  <div class="col-lg-4 col-custom">
                     <div class="row">
                        <?php $i = 0 ?>
                        <?php if(have_rows('h6_re')){ ?>
                        <?php while(have_rows('h6_re')): the_row(); ?>
                        <?php $i++ ?>
                        <?php if($i%2==1){ ?>
                        <div class="col-lg-12 col-md-6">
                           <div class="list-choose">
                              <h3><?php the_sub_field('h6_re_title') ?></h3>
                              <p><?php the_sub_field('h6_re_des') ?></p>
                           </div>
                        </div>
                        <?php } ?>
                        <?php endwhile ?>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                     </div>
                  </div>
                  <div class="col-lg-4 col-custom">
                     <div class="img-mid wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/images/icon/may-bay.png" alt="">
                        <div class="light light1"></div>
                        <div class="light light2"></div>
                        <div class="light light3"></div>
                        <div class="light light4"></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-custom">
                     <div class="row">
                        <?php $i = 0 ?>
                        <?php if(have_rows('h6_re')){ ?>
                        <?php while(have_rows('h6_re')): the_row(); ?>
                        <?php $i++ ?>
                        <?php if($i%2==0){ ?>
                        <div class="col-lg-12 col-md-6">
                           <div class="list-choose">
                              <h3><?php the_sub_field('h6_re_title') ?></h3>
                              <p><?php the_sub_field('h6_re_des') ?></p>
                           </div>
                        </div>
                        <?php } ?>
                        <?php endwhile ?>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="site-word">
      <div class="container">
         <div class="site-title">
            <h2 class="heading m-0"><?php the_field('h7_title') ?></h2>
            <p class="des"><?php the_field('h7_des') ?></p>
         </div>
         <div class="word-content">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <div class="word-img">
                     <img class="w-100" src="<?php the_field('h7_images') ?>" alt="word">
                  </div>
               </div>
               <div class="col-md-7">
                  <?php if(have_rows('h7_re')){ ?>
                  <div class="site-word_list">
                     <?php while(have_rows('h7_re')): the_row(); ?>
                     <div class="word">
                        <div class="row align-items-center m-0">
                           <div class="col-lg-2 col-md-2 p-0">
                              <div class="img">
                                 <img src="<?php the_sub_field('h7_re_img') ?>" alt="">
                              </div>
                           </div>
                           <div class="col-lg-10 col-md-10 p-0">
                              <div class="text">
                                 <h3 style="color:<?php the_sub_field('h7_re_color') ?>;"><?php the_sub_field('h7_re_title') ?></h3>
                                 <p><?php the_sub_field('h7_re_des') ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endwhile ?>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="morea">
            <a class="btn-custom" href="<?php the_field('h7_link') ?>" title="<?php the_field('h7_title') ?>"><span>Xem thêm dự án khác</span></a>
         </div>
      </div>
   </section>
   <section class="site-bottom">
      <div class="site-news">
         <div class="container">
            <div class="site-title">
               <h2 class="heading m-0"><?php the_field('h8_title') ?></h2>
               <p class="des"><?php the_field('h8_des') ?></p>
            </div>
            <div class="row">
               <?php 
                  $the_query = new WP_Query( $args = array(
                   'post_type'  => 'post',
                   'posts_per_page' => 3,
                   'offset' => 0,  
                  ) );
                  $countp = $the_query ->found_posts; 
                  if ( $the_query->have_posts() ) :
                    ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <div class="col-md-4">
                  <?php get_template_part( 'template-parts/content', 'news' ); ?>
               </div>
               <?php endwhile; ?>
               <?php endif; 
                  ?>
               <?php wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
      <div class="site-customer">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="customer-text">
                     <h2><?php the_field('h9_title') ?></h2>
                     <div class="des">
                        <?php the_field('h9_des') ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="owl-customer">
                     <div class="owl-theme sl-c owl-carousel">
                        <?php if(have_rows('h9_re')){ ?>
                        <?php while(have_rows('h9_re')): the_row(); ?>
                        <div class="item">
                           <div class="description">
                              <?php the_sub_field('h9_re_des') ?>
                           </div>
                           <div class="user">
                              <img src="<?php the_sub_field('h9_re_images') ?>" alt="<?php the_sub_field('h9_re_name') ?>">
                              <div class="text">
                                 <h3><?php the_sub_field('h9_re_name') ?></h3>
                                 <span><?php the_sub_field('h9_re_cd') ?></span>
                              </div>
                           </div>
                        </div>
                        <?php endwhile ?>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="site-pane">
         <div class="container">
            <?php if(have_rows('h10_re')){ ?>
            <div class="owl-theme sl-pane owl-carousel">
               <?php while(have_rows('h10_re')): the_row(); ?>
               <div class="item">
                  <img src="<?php the_sub_field('h10_images') ?>" alt="<?php the_sub_field('h10_images') ?>">
               </div>
               <?php endwhile ?>
            </div>
            <?php } ?>
         </div>
      </div>
   </section>
</main>
<?php
get_footer();