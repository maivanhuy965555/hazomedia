<?php
//Upload SVG
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
//Thumbnail
if ( ! function_exists( 'ws247_post_thumbnail' ) ) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function ws247_post_thumbnail() {
      if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        echo get_stylesheet_directory_uri().'/assets/images/default-thumbnail.jpg';
      } else {
       the_post_thumbnail_url('thumbnail');
     }
   }
 endif;

 if ( ! function_exists( 'ws247_post_thumbnail_full' ) ) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function ws247_post_thumbnail_full() {
      if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
        echo get_stylesheet_directory_uri().'/assets/images/default-thumbnail.jpg';
      } else {
       the_post_thumbnail_url();
     }
   }
 endif;
//Pagination
 function ws247_pagination() {

  if( is_singular() )
    return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div class="ws247-pagination"><ul class="pagination">' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link() );

  echo '</ul></div>' . "\n";

}
//echo excerp(x)
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
    array_pop($content);
    $content = implode(" ", $content) . '...';
  } else {
    $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}

/*Css Admin*/
if ( ! function_exists( 'ws247_css_admin' ) ) :
  add_action('admin_head', 'ws247_css_admin');
  add_action('admin_enqueue_scripts', 'ws247_css_admin');
  function ws247_css_admin() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/admin/admin.css');
  }
endif;
/*Css Login*/
if ( ! function_exists( 'ws247_css_admin_login' ) ) :
  add_action( 'login_enqueue_scripts', 'ws247_css_admin_login' );
  function ws247_css_admin_login() {
    wp_enqueue_style( 'admin_login_css', get_template_directory_uri() . '/admin/login.css');
  }
endif;

/*Tạo Option*/
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
  acf_add_options_sub_page(array(
    'page_title'  => 'Header',
    'menu_title'  => 'Header',
    'parent_slug' => 'themes.php',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    'parent_slug' => 'themes.php',
  ));
}
/*Map API */
function odinland_acf_init() {
  $google_maps_api_key = 'AIzaSyDM2SsC4gbIKpKPHj6Wbrzh8pjhr9fjDlw';
  if (!empty($google_maps_api_key)) {
    acf_update_setting('google_api_key', $google_maps_api_key);
  }
}

add_action('acf/init', 'odinland_acf_init');

function odinland_enqueue_google_maps_scripts() {
  $google_maps_api_key = 'AIzaSyDM2SsC4gbIKpKPHj6Wbrzh8pjhr9fjDlw';

  $allowed_pages = is_singular('property');

  if (!empty($google_maps_api_key) && $allowed_pages) :
    echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $google_maps_api_key . '"
    async defer></script>';
  endif;
}
add_action('wp_footer', 'odinland_enqueue_google_maps_scripts');