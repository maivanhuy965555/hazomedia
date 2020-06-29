<?php 
class ws247_widget extends WP_Widget {
  function __construct() {

    parent::__construct(

      'ws247_widget',

      'Danh mục bài viết',

      array( 'description'  =>  'Widget hiển thị Widget' )

    );

  }



  function form( $instance ) {

    $default = array(

    );

    $instance = wp_parse_args( (array) $instance, $default );

  }



  function update( $new_instance, $old_instance ) {

    $instance = $old_instance;

    return $instance;

  }



  function widget( $args, $instance ) {

    extract($args);
    ?>


    <div class="widgethml sidebar_top-news">
      <h2><?php the_field('wd_name','widget_'.$args["widget_id"]) ?></h2>
      <?php 
        $number = get_field('wd_number');
       ?>
      <?php 
      $the_query = new WP_Query( $args = array(
       'post_type'  => 'post',
       'posts_per_page' => 3,
     ) );
      $countp = $the_query ->found_posts; 
      if ( $the_query->have_posts() ) :
        ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="box-text-news">
            <div class="img-br">
              <div class="row m-0">
                <div class="col-md-4 p-0">
                  <a href="<?php the_permalink(); ?>"><img class="w-100 img-left d-block" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                <div class="col-md-8 p-0">
                  <div class="text">
                    <h3><a class="text-a" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <span class="d-block date">
                      <span ><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?> </span>
                      <span><i class="fa fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?></span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; 
      ?> 
      
    </div>
    <?php

  }

}
add_action( 'widgets_init', 'create_ws247_widget' );




function create_ws247_widget() {

  register_widget('ws247_widget');

}

class ws247_widget2 extends WP_Widget {

  function __construct() {

    parent::__construct(

      'ws247_widget2',

      'Danh mục Dự án',

      array( 'description'  =>  'Widget hiển thị Widget' )

    );

  }



  function form( $instance ) {

    $default = array(

    );

    $instance = wp_parse_args( (array) $instance, $default );

  }



  function update( $new_instance, $old_instance ) {

    $instance = $old_instance;

    return $instance;

  }



  function widget( $args, $instance ) {

    extract($args);
    ?>


    <div class="widgethml sidebar_top-news">
      <h2><?php the_field('wd_name','widget_'.$args["widget_id"]) ?></h2>
      <?php 
        $number = get_field('wd_number');
       ?>
      <?php 
      $the_query = new WP_Query( $args = array(
       'post_type'  => 'dich_vu',
       'posts_per_page' => 3,
     ) );
      $countp = $the_query ->found_posts; 
      if ( $the_query->have_posts() ) :
        ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="box-text-news">
            <div class="img-br">
              <div class="row m-0">
                <div class="col-md-4 p-0">
                  <a href="<?php the_permalink(); ?>"><img class="w-100 img-left d-block" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                <div class="col-md-8 p-0">
                  <div class="text">
                    <h3><a class="text-a" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <span class="d-block date">
                      <span ><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?> </span>
                      <span><i class="fa fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?></span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; 
      ?> 
      
    </div>
    <?php

  }

}
add_action( 'widgets_init', 'create_ws247_widget_2' );

function create_ws247_widget_2() {

  register_widget('ws247_widget2');

}