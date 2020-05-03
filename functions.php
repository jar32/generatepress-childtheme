<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue' );
function my_theme_enqueue() {
 
    $parent_style = 'generatepress-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/app.min.js', array ( 'jquery' ), 1.1, true);
}

//Remove generatepress copyright
add_filter( 'generate_copyright','tu_custom_copyright' );
function tu_custom_copyright() {
    ?>
    © 2020 ACME Domotics
    <?php
}

//Login Custom Logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: auto !important;
            background-image: url("<?php echo get_stylesheet_directory_uri();?>/assets/logo.png") !important;
            background-size: 50% !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Dashboard Custom Logo

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');
function wpb_custom_logo() {
    echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/logo-16.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
background-size: 100% !important;
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}

