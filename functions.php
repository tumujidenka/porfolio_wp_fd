<?php
function my_enqueue_styles(){
    // テーマの基本URLを取得
    $theme_uri = get_template_directory_uri();
    wp_enqueue_style('reset',$theme_uri . '/reset.css',array(),false,'all');
    wp_enqueue_style('style',$theme_uri . '/style.css',array('reset'),false,'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function st_enqueue_scripts() {
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true);
  }
  add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

  