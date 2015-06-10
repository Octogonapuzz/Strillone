<?php

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('title-menu',__( 'Title Menu' ));
}
add_action( 'init', 'register_my_menu' );

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Sidebar',
		'id' => 'sidebar_tab',
		'before_widget' => '<div id="%1$s" class="sidebarItem %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Footer',
		'id' => 'footer_tab',
		'before_widget' => '<div id="%1$s" class="footer_tab">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><hr>',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Riconoscimenti',
		'id' => 'credits_tab',
		'before_widget' => '<div id="%1$s" class="creditsItem %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

function ultimi_post() {

	$list = "<ul>";

	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		$riassunto = wp_trim_excerpt($recent["post_content"]);
		$list .= '<li class="minipost"><figure><span class="img">'.get_the_post_thumbnail( $recent['ID'], array(50,50) ).'</span><figcaption><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a><br>'.$riassunto.'</figcaption> </figure></li> ';
	}
	$list .= "</ul>";

	return $list;
?>

<?php
}

add_shortcode("ultimi_post", "ultimi_post");

function authorship() {
	$authorship = '
	<small class="copyright">Template realizzato da <a href="http://danieleirsuti.com" rel="author">Daniele Irsuti</a> <i class="fa fa-copyright"></i> ';
	$authorship .=  '<a href="'.get_bloginfo("url").'">'.get_bloginfo("site").'</a>';
	$authorship .='</small>';
	
	return $authorship;
}

add_shortcode("authorship", "authorship");

function tagz($t) {
$tags = wp_get_post_tags($t);
if (!empty($tags)) {
$html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} taglinks' rel='tag'>";
	$html .= "{$tag->name}</a>";
}
$html .= '</div>';
echo $html; 
}

else
	echo '<p class="notag">Nessun tag!</p>';
}

function my_loginlogo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_template_directory_uri() . '/img/IB.png) !important;
      background-size: 300px !important;
      -webkit-background-size: 300px !important;
      width: 300px !important;
      height: 300px !important;
    }
  </style>';
}
add_action('login_head', 'my_loginlogo');
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/js/main.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
?>


