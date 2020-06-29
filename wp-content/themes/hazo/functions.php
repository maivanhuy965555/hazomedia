<?php
/**
 * ws247 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ws247
 */

if ( ! function_exists( 'ws247_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ws247_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ws247, use a find and replace
		 * to change 'ws247' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ws247', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ws247' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ws247_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ws247_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ws247_content_width', 640 );
}
add_action( 'after_setup_theme', 'ws247_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ws247_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Dịch vụ', 'ws247' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'ws247' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Tin tức', 'ws247' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ws247' ),
		'before_widget' => '<div id="%1$s" class="widget widgethml %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ws247_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ws247_scripts() {
	wp_enqueue_style( 'ws247-style', get_stylesheet_uri() );
	wp_enqueue_style('css_bs4', get_template_directory_uri() . '/assets/plusgin/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('css_awesome', get_template_directory_uri() . '/assets/plusgin/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('css_text', get_template_directory_uri() . '/assets/plusgin/fonts/text/stylesheet.css');
	wp_enqueue_style('css_fancybox', get_template_directory_uri() . '/assets/plusgin/box/jquery.fancybox.min.css');
	wp_enqueue_style('css_animate', get_template_directory_uri() . '/assets/plusgin/animation/animate.css');
	wp_enqueue_style('css_slick', get_template_directory_uri() . '/assets/plusgin/slick/slick.css');
	wp_enqueue_style('css_slicktheme', get_template_directory_uri() . '/assets/plusgin/slick/slick-theme.css');
	wp_enqueue_style('css_carousel', get_template_directory_uri() . '/assets/plusgin/carousel/owl.carousel.min.css');
	wp_enqueue_style('css_cdefault', get_template_directory_uri() . '/assets/plusgin/carousel/owl.theme.default.min.css');
	wp_enqueue_style('css_mobile', get_template_directory_uri() . '/assets/plusgin/menu-mobile/demo.css');
	wp_enqueue_style('css_style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('css_responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('css_res_style', get_template_directory_uri() . '/assets/css/cus-res.css');

	/* ================================================================================= */

	wp_enqueue_script( 'ws247-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '20151215', false );
	wp_enqueue_script( 'ws247-bootstrap', get_template_directory_uri() . '/assets/plusgin/bootstrap/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-fancybox', get_template_directory_uri() . '/assets/plusgin/box/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-animation', get_template_directory_uri() . '/assets/plusgin/animation/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-slick', get_template_directory_uri() . '/assets/plusgin/slick/slick.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-carousel', get_template_directory_uri() . '/assets/plusgin/carousel/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-offcanvas', get_template_directory_uri() . '/assets/plusgin/menu-mobile/hc-offcanvas-nav.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-point', get_template_directory_uri() . '/assets/plusgin/counter/jquery.waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-counter', get_template_directory_uri() . '/assets/plusgin/counter/jquery.countup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-sticky', get_template_directory_uri() . '/assets/plusgin/stickyfill-master/dist/stickyfill.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-filter', get_template_directory_uri() . '/assets/plusgin/filter-js/js/jquery.mixitup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-index', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'ws247-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ws247-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ws247_scripts' );


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer Navbar
 */
require get_template_directory() . '/inc/custom/custom-navbar.php';

/**
 * Customizer Wordpress
 */
require get_template_directory() . '/inc/custom/custom-wp.php';

/**
 * Customizer Widgets
 */
require get_template_directory() . '/inc/custom/custom-widgets.php';




/**
 * Remove medium_large size
 */
function ws247_remove_image_sizes( $sizes) {
	unset( $sizes['large'] );
	unset( $sizes['medium_large'] );
	unset( $sizes['medium'] );
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'ws247_remove_image_sizes');

/**
* ACF
*/
// 1. customize ACF path
add_filter('acf/settings/path', 'willgroup_acf_settings_path');
function willgroup_acf_settings_path( $path ) {
	$path = get_stylesheet_directory() . '/inc/acf/';
	return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'willgroup_acf_settings_dir');
function willgroup_acf_settings_dir( $dir ) {
	$dir = get_stylesheet_directory_uri() . '/inc/acf/';
	return $dir;
}

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



add_filter('use_block_editor_for_post', '__return_false');

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

?>

<?php 


function giniit_remove_slug( $post_link, $post ) {
    if ( !in_array( get_post_type($post), array( 'du_an' ) ) || 'publish' != $post->post_status ) {
        return $post_link;
    }
    if('du_an' == $post->post_type){
        $post_link = str_replace( '/du_an/', '/', $post_link ); //Thay cua-hang bằng slug hiện tại của bạn
    }else{
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'giniit_remove_slug', 10, 2 );
/*Sửa lỗi 404 sau khi đã remove slug du_an hoặc cua-hang*/
function giniit_woo_du_an_rewrite_rules($flash = false) {
    global $wp_post_types, $wpdb;
    $siteLink = esc_url(home_url('/'));
    foreach ($wp_post_types as $type=>$custom_post) {
        if($type == 'du_an'){
            if ($custom_post->_builtin == false) {
                $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                            FROM {$wpdb->posts} 
                            WHERE {$wpdb->posts}.post_status = 'publish'
                            AND {$wpdb->posts}.post_type = '{$type}'";
                $posts = $wpdb->get_results($querystr, OBJECT);
                foreach ($posts as $post) {
                    $current_slug = get_permalink($post->ID);
                    $base_du_an = str_replace($siteLink,'',$current_slug);
                    add_rewrite_rule($base_du_an.'?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top');
                }
            }
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'giniit_woo_du_an_rewrite_rules');
/*Fix lỗi khi tạo sản phẩm mới bị 404*/
function giniit_woo_new_du_an_post_save($post_id){
    global $wp_post_types;
    $post_type = get_post_type($post_id);
    foreach ($wp_post_types as $type=>$custom_post) {
        if ($custom_post->_builtin == false && $type == $post_type) {
            giniit_woo_du_an_rewrite_rules(true);
        }
    }
}
add_action('wp_insert_post', 'giniit_woo_new_du_an_post_save');


/*
* Loại bỏ /taxonomies_project/ ở đường dẫn
* Thay /taxonomies_project/ slug hiện tại của bạn. Mặc định là /taxonomies_project/
*/
add_filter( 'term_link', 'giniit_taxonomies_project_permalink', 10, 3 );
function giniit_taxonomies_project_permalink( $url, $term, $taxonomy ){
    switch ($taxonomy):
        case 'taxonomies_project':
            $taxonomy_slug = 'taxonomies_project'; //Thay bằng slug hiện tại của bạn. Mặc định là /taxonomies_project/
            if(strpos($url, $taxonomy_slug) === FALSE) break;
            $url = str_replace('/' . $taxonomy_slug, '', $url);
            break;
    endswitch;
    return $url;
}
// Add our custom du_an cat rewrite rules
function giniit_taxonomies_projectegory_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'taxonomies_project',
        'post_type' => 'du_an',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term){
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl,'',get_term_link($term->term_id,'taxonomies_project'));
            add_rewrite_rule($baseterm.'?$','index.php?taxonomies_project='.$term_slug,'top');
            add_rewrite_rule($baseterm.'page/([0-9]{1,})/?$', 'index.php?taxonomies_project='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($baseterm.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?taxonomies_project='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'giniit_taxonomies_projectegory_rewrite_rules');
/*Sửa lỗi khi tạo mới taxomony bị 404*/
add_action( 'create_term', 'giniit_new_taxonomies_project_edit_success', 10, 2 );
function giniit_new_taxonomies_project_edit_success( $term_id, $taxonomy ) {
    giniit_taxonomies_projectegory_rewrite_rules(true);
}



function giniit_remove_slug_2( $post_link, $post ) {
    if ( !in_array( get_post_type($post), array( 'dich_vu' ) ) || 'publish' != $post->post_status ) {
        return $post_link;
    }
    if('dich_vu' == $post->post_type){
        $post_link = str_replace( '/dich_vu/', '/', $post_link ); //Thay cua-hang bằng slug hiện tại của bạn
    }else{
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'giniit_remove_slug_2', 10, 2 );
/*Sửa lỗi 404 sau khi đã remove slug dich_vu hoặc cua-hang*/
function giniit_woo_dich_vu_rewrite_rules($flash = false) {
    global $wp_post_types, $wpdb;
    $siteLink = esc_url(home_url('/'));
    foreach ($wp_post_types as $type=>$custom_post) {
        if($type == 'dich_vu'){
            if ($custom_post->_builtin == false) {
                $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                            FROM {$wpdb->posts} 
                            WHERE {$wpdb->posts}.post_status = 'publish'
                            AND {$wpdb->posts}.post_type = '{$type}'";
                $posts = $wpdb->get_results($querystr, OBJECT);
                foreach ($posts as $post) {
                    $current_slug = get_permalink($post->ID);
                    $base_dich_vu = str_replace($siteLink,'',$current_slug);
                    add_rewrite_rule($base_dich_vu.'?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top');
                }
            }
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'giniit_woo_dich_vu_rewrite_rules');
/*Fix lỗi khi tạo sản phẩm mới bị 404*/
function giniit_woo_new_dich_vu_post_save($post_id){
    global $wp_post_types;
    $post_type = get_post_type($post_id);
    foreach ($wp_post_types as $type=>$custom_post) {
        if ($custom_post->_builtin == false && $type == $post_type) {
            giniit_woo_dich_vu_rewrite_rules(true);
        }
    }
}
add_action('wp_insert_post', 'giniit_woo_new_dich_vu_post_save');


/*
* Loại bỏ /taxonomies_services/ ở đường dẫn
* Thay /taxonomies_services/ slug hiện tại của bạn. Mặc định là /taxonomies_services/
*/
add_filter( 'term_link', 'giniit_taxonomies_services_permalink', 10, 3 );
function giniit_taxonomies_services_permalink( $url, $term, $taxonomy ){
    switch ($taxonomy):
        case 'taxonomies_services':
            $taxonomy_slug = 'taxonomies_services'; //Thay bằng slug hiện tại của bạn. Mặc định là /taxonomies_services/
            if(strpos($url, $taxonomy_slug) === FALSE) break;
            $url = str_replace('/' . $taxonomy_slug, '', $url);
            break;
    endswitch;
    return $url;
}
// Add our custom dich_vu cat rewrite rules
function giniit_taxonomies_servicesegory_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'taxonomies_services',
        'post_type' => 'dich_vu',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term){
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl,'',get_term_link($term->term_id,'taxonomies_services'));
            add_rewrite_rule($baseterm.'?$','index.php?taxonomies_services='.$term_slug,'top');
            add_rewrite_rule($baseterm.'page/([0-9]{1,})/?$', 'index.php?taxonomies_services='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($baseterm.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?taxonomies_services='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'giniit_taxonomies_servicesegory_rewrite_rules');
/*Sửa lỗi khi tạo mới taxomony bị 404*/
add_action( 'create_term', 'giniit_new_taxonomies_services_edit_success', 10, 2 );
function giniit_new_taxonomies_services_edit_success( $term_id, $taxonomy ) {
    giniit_taxonomies_servicesegory_rewrite_rules(true);
}


add_action( 'wp_ajax_nopriv_loadmore', 'prefix_load_posts' );
add_action( 'wp_ajax_loadmore', 'prefix_load_posts' );
function prefix_load_posts () {
    $offset = !empty($_POST['offset']) ? intval( $_POST['offset'] ) : '';
    if ($offset) {
        $the_query = new WP_Query( $args = array(
            'post_type'  => 'du_an',
            'posts_per_page' => 6,
            'offset' => $offset,
        ) );
        if ( $the_query->have_posts() ) : ?>  
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php global $post ?>
                <?php get_template_part( 'template-parts/content','project' ); ?>
            <?php endwhile; ?>
            <?php
        else:
            echo 'end';
        endif;
        wp_reset_postdata();
    }
    die();
}

 ?>


