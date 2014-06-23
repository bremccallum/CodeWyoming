<?php
/*---Get Stylesheet---*/
    function legit_theme_scripts() {
	   wp_enqueue_style( 'legit-theme-style', get_stylesheet_uri() );
    }

add_action( 'wp_enqueue_scripts', 'legit_theme_scripts' );

/*---Register Menus--*/

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' =>  'Primary Menu' 
		)
	);
}

add_theme_support( 'post-thumbnails' ); 

?>

<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
?>
