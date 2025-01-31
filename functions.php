<?php
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
  }
  add_action("after_setup_theme", "my_setup");

function my_script_init() {
    // SwiperのCSS
    wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), null);

    // jQueryのCSS
    wp_enqueue_style("animate-css", get_template_directory_uri() . "/css/lib/animate.css", array(), filemtime(get_theme_file_path('css/lib/animate.css')), "all");

    // reset.css
    wp_enqueue_style("reset", get_template_directory_uri() . "/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");

    // style.css
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");

    // jQuery（WordPressに含まれるバージョンを使用する場合）
    wp_enqueue_script('jquery');

    // SwiperのJavaScript
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), null, true);

    // WOWのJavaScript
    wp_enqueue_script('wow-js',  get_template_directory_uri() . "/js/lib/wow.min.js",  array(), filemtime(get_theme_file_path('js/lib/wow.min.js')), true);

    // WOWの初期化
    wp_add_inline_script('wow-js', 'new WOW().init();');

    // JavaScript
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// メニュー
function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
        )
        );
}
add_action('init', 'my_menu_init');