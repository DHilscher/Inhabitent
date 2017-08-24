<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height: 53px !important;
		width: 300px !important;
		background-size: 300px 53px !important;
		background-repeat: no-repeat !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

function inhabitent_login_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );

/**
 * Make hero image customizable through CFS field or featured image.
 */
function inhabitent_dynamic_css() {
    if ( ! is_page_template( 'page-templates/about.php' ) ) {
        return;
    }
    
    $image = CFS()->get( 'about_header_image' );
    if ( ! $image ) {
        return;
    }
    $hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";
    wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

// changes archive title

function inhabitent_archive_title( $title ) {
    if ( is_post_type_archive('product') ) {
        $title = 'Shop Stuff';
    } elseif ( is_tax('product-type') ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );

function inhabitent_excerpt_length( $length ) {
	return 49;
}
add_filter( 'excerpt_length', 'inhabitent_excerpt_length', 999 );

function inhabitent_excerpt_more( $more ) {
    return sprintf( ' [...]<br><br><a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More →', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'inhabitent_excerpt_more' );