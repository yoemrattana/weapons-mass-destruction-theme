<?php
/**
 * news functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news
 */

if ( ! function_exists( 'news_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function news_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on news, use a find and replace
		 * to change 'news' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'news', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'news' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'news_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'news_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function news_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'news_content_width', 640 );
}
add_action( 'after_setup_theme', 'news_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function news_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'news' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'news_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function news_scripts() {
	wp_enqueue_style( 'news-style', get_stylesheet_uri() );

	wp_enqueue_script( 'news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'news_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**/
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ( $pages as $page ) {
			//$pagination .= '<li class="page-item"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
			$pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
		}
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}

add_action( 'pagination', 'bootstrap_pagination' );

function add_image_class($class){
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');

// function nacwnews_modify_taxonomy() {
//     // get the arguments of the already-registered taxonomy
//     $language_args = get_taxonomy( 'language' ); // returns an object

//     // make changes to the args
//     // in this example there are three changes
//     // again, note that it's an object
//     $language_args->show_in_rest = true;

//     // re-register the taxonomy
//     register_taxonomy( 'language', 'news_pt', (array) $language_args );
    
// }
// // hook it up to 11 so that it overrides the original register_taxonomy function
// add_action( 'init', 'nacwnews_modify_taxonomy', 110 );

// function nacwevent_modify_taxonomy() {
//     // get the arguments of the already-registered taxonomy
//     $language_args = get_taxonomy( 'language' ); // returns an object

//     // make changes to the args
//     // in this example there are three changes
//     // again, note that it's an object
//     $language_args->show_in_rest = true;

//     // re-register the taxonomy
    
//     register_taxonomy( 'language', 'event_pt', (array) $language_args );
// }
// // hook it up to 11 so that it overrides the original register_taxonomy function
// add_action( 'init', 'nacwevent_modify_taxonomy', 111 );
// fix polylang language segmentation

/*
* To filter langauge in api ?lang=en or ?lang=km
*/ 
function polylang_json_api_init() {
	global $polylang;
	$default = pll_default_language();
	$langs = pll_languages_list();
	$cur_lang = $_GET['lang'];
	if (!in_array($cur_lang, $langs)) {
		$cur_lang = $default;
	}
	$polylang->curlang = $polylang->model->get_language($cur_lang);
	$GLOBALS['text_direction'] = $polylang->curlang->is_rtl ? 'rtl' : 'ltr';
}
add_action('rest_api_init', 'polylang_json_api_init');

// function remove_images( $content ) {
//    $postOutput = preg_replace('/<img[^>]+./','', $content);
//    return $postOutput;
// }
// add_filter( 'the_content', 'remove_images', 1 );


function nacw_remove_extra_data_news($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
        $data->data['title'] = $data->data['title']['rendered'] ;
        
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        $data->data['category'] = get_the_category( $post->ID )[0]->cat_name;
        $data->data['image'] = $data->data['acf']['image']['url'] ;
        $data->data['content'] = wp_strip_all_tags(preg_replace( '/<img[^>]+./','', $data->data['acf']['description'] ) );
        //preg_match("#<img(.+?)src=(.+?)\/>#", $data->data['acf']['description'], $matches);
        $regex = '/src="([^"]*)"/';
        preg_match_all( $regex, $data->data['acf']['description'], $matches );
        $matches = array_reverse($matches);
        $data->data['image_gallery'] = ! empty($matches[0]) ? $matches[0] : null;
        unset( $data->data['acf']);
        unset( $data->data['links']);
        unset( $data->data['categories']);
        unset( $data->data['slug'] );
        unset( $data->data['link'] );
        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
        //$data->data['excerpt'] = $data->data['excerpt']['rendered'] ;
         // unset ($data->data['name field to remove']) ;
         // //or 
         // unset ($data->data['name field to remove']['name subfield if you only want to delete the sub-field of field' ]); 
	    //return new wp_remote_retrieve_header($data); 
	    
	   	// $response = new WP_REST_Response( $data );

	   	// $response->set_status( 201 );
	   	return $data;
	    //return new WP_REST_Response(['sucess'=>$data], 200);
	    //var_dump(wp_remote_retrieve_response_code($data));
     }
}
add_filter ('rest_prepare_news_pt' ,'nacw_remove_extra_data_news', 12, 3);

 function nacw_remove_extra_data_event($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        $data->data['image'] = $data->data['acf']['image']['url'] ;
        $data->data['content'] = wp_strip_all_tags( $data->data['acf']['description'] );
        $data->data['youtube_video_id'] = $data->data['acf']['video'] ;
        unset( $data->data['acf']);
        unset( $data->data['links']);
        unset( $data->data['slug'] );
        unset( $data->data['link'] );
        $galleries = acf_photo_gallery( 'gallery', $post->ID );
        $full_image_url = [];
        foreach ( $galleries as $gallery) {
        	$full_image_url[] = $gallery['full_image_url'];
        }

        $data->data['image_gallery'] = $full_image_url;

        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
        return $data; 
     }
}
add_filter ('rest_prepare_event_pt' ,'nacw_remove_extra_data_event', 12, 3);

function nacw_remove_extra_data_video($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['link']);
        $data->data['image'] = $data->data['acf']['image']['url'] ;
        $data->data['youtube_video_id'] = $data->data['acf']['video'] ;
        unset( $data->data['acf']);
        unset( $data->data['links']);

        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
        return $data; 
     }
}
add_filter ('rest_prepare_video' ,'nacw_remove_extra_data_video', 12, 3);

function utf8_urldecode($str) {
    $str = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($str));
    return html_entity_decode($str,null,'UTF-8');;
}

function nacw_remove_extra_data_press_release($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        $data->data['image'] = $data->data['acf']['image']['url'] ;

        $regex = '/file=([^"]*)&download/';
        preg_match( $regex, $data->data['content']['rendered'], $matches );
		$matches = array_reverse($matches);

        $data->data['content'] = utf8_urldecode( $matches[0] );

        unset( $data->data['acf']);
        unset( $data->data['links']);
        unset( $data->data['slug'] );
        unset( $data->data['link'] );

        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
        return $data; 
     }
}
add_filter ('rest_prepare_press_release' ,'nacw_remove_extra_data_press_release', 12, 3);


function nacw_remove_extra_data_publicaton($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        $data->data['image'] = $data->data['acf']['image']['url'] ;
        $regex = '/file=([^"]*)&download/';
        preg_match( $regex, $data->data['content']['rendered'], $matches );
		$matches = array_reverse($matches);

        $data->data['content'] = utf8_urldecode( $matches[0] );

        //$data->data['content'] = $data->data['content']['rendered'] ;
        unset( $data->data['acf']);
        unset( $data->data['links']);
        unset( $data->data['slug'] );
        unset( $data->data['link'] );

        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
         return $data; 
     }
}
add_filter ('rest_prepare_publication' ,'nacw_remove_extra_data_publicaton', 12, 3);


/*function nacw_remove_extra_data_publicaton1($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        $data->data['image'] = $data->data['acf']['image']['url'] ;
        $data->data['content'] = $data->data['content']['rendered'] ;
        unset( $data->data['acf']);
        unset( $data->data['links']);

        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
         return $data; 
     }
}
add_filter ('rest_prepare_post' ,'nacw_remove_extra_data_publicaton1', 10, 3);*/

function nacw( $request_data ) {
	// setup query argument
	$args = array(
		'post_type' => 'photo',
	);

	// get posts
	$posts = get_posts($args);

	// add custom field data to posts array	
	foreach ($posts as $key => $post) {
			//$posts[$key]->id = $posts[$key]->ID;

			unset( $posts[$key]->post_author );
			unset( $posts[$key]->post_date_gmt );
			unset( $posts[$key]->post_content );
			unset( $posts[$key]->post_excerpt );
			unset( $posts[$key]->post_status );
			unset( $posts[$key]->comment_status );
			unset( $posts[$key]->ping_status );
			unset( $posts[$key]->post_password );
			unset( $posts[$key]->to_ping );
			unset( $posts[$key]->pinged );
			unset( $posts[$key]->post_modified );
			unset( $posts[$key]->post_modified_gmt );
			unset( $posts[$key]->post_content_filtered );
			unset( $posts[$key]->post_parent );
			unset( $posts[$key]->guid );
			unset( $posts[$key]->menu_order );
			unset( $posts[$key]->post_mime_type );
			unset( $posts[$key]->comment_count );
			unset( $posts[$key]->filter );


			//$posts[$key]->acf = get_fields($post->ID);
			$images = acf_photo_gallery( 'photo_gallery', $post->ID );

			$full_image_url = [];
	        foreach ( $images as $image) {
	        	$full_image_url[] = $image['full_image_url'];
	        }

			$posts[$key]->gallery = $full_image_url;
			//$posts[$key]->link = get_permalink($post->ID);
			//$posts[$key]->image = get_the_post_thumbnail_url($post->ID);

			//unset( $posts[$key]->ID );
	}

	return $posts;
}

// register the endpoint
add_action( 'rest_api_init', function () {
	register_rest_route( 'nacw/v1', '/photo/', array(
		'methods' => 'GET',
		'callback' => 'nacw',
		)
	);
});

function nacw_remove_extra_data_pages($data, $post, $context) {
    // We only want to modify the 'view' context, for reading posts 
    if ($context!== 'view' || is_wp_error ($data)) {
    	$data->data['title'] = $data->data['title']['rendered'] ;
        unset( $data->data['date_gmt'] );
        unset( $data->data['guid']);
        unset( $data->data['type']);
        unset( $data->data['modified']);
        unset( $data->data['modified_gmt']);
        unset( $data->data['status']);
        unset( $data->data['excerpt']);
        unset( $data->data['template']);
        unset( $data->data['_links']);
        unset( $data->data['author']);
        unset( $data->data['featured_media']);
        unset( $data->data['parent']);
        unset( $data->data['menu_order']);
        unset( $data->data['comment_status']);
        unset( $data->data['ping_status']);
        unset( $data->data['meta']);
        unset( $data->data['ping_status']);
        
     //    $data->data['image'] = $data->data['acf']['image']['url'] ;
        $data->data['content'] = wp_strip_all_tags( $data->data['content']['rendered'] );
        
        unset( $data->data['link']);
        if ( $data->data['slug'] === 'contacts' || $data->data['slug'] === 'contacts-en' ) {
        	
        	$data->data['phone'] = $data->data['acf']['phone'];
        	$data->data['email'] = $data->data['acf']['email'];
        	$data->data['address'] = $data->data['acf']['address'];
        	$data->data['map'] = $data->data['acf']['map'];
        }
        unset( $data->data['acf']);
        
        $data->remove_link( 'collection' );
	    $data->remove_link( 'self' );
	    $data->remove_link( 'about' );
	    $data->remove_link( 'author' );
	    $data->remove_link( 'replies' );
	    $data->remove_link( 'version-history' );
	    $data->remove_link( 'predecessor-version' );
	    $data->remove_link( 'wp:attachment' );
	    $data->remove_link( 'https://api.w.org/featuredmedia' );
	    $data->remove_link( 'https://api.w.org/attachment' );
	    $data->remove_link( 'https://api.w.org/term' );
	    $data->remove_link( 'curies' );
        return $data; 
     }
}
add_filter ('rest_prepare_page' ,'nacw_remove_extra_data_pages', 12, 3);

/*
* Post View Number
*/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
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
 
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 