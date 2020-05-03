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


add_filter( 'generate_copyright','tu_custom_copyright' );
function tu_custom_copyright() {
    ?>
    © 2020 ACME Domotics
    <?php
}

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