<?php
add_action('init', function(){
    add_theme_support('post-thumbnails');
});

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

// /**************************************************
// アイキャッチの有効化
// **************************************************/
// function set_thumbnails(){
//     add_theme_support('post_thumbnails');
// }
// add_action('after_setup_theme','set_thumbnails');

/**************************************************
ページネーション
**************************************************/
function pagination($pages = '', $range = 2){
    $showitems = ($range * 2) + 1;

    //現在のページ数
    global $paged;
    if(empty($paged)){
        $paged = 1;
    }

    //全ページ数
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query -> max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    //ページ数が2ページ以上の場合のみ、ページネーションを表示
    if(1 != $pages){
        echo '<div class="product__pagination">';
        echo '<ul class="pages">';

        //ページ番号を表示(現在のページはリンクにしない)
        for($i=1; $i <= $pages; $i++){
            if(1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1)|| $pages <= $showitems)) {
                if ($paged ==  $i){
                    echo '<li class="pages__page">' ,$i. '</li>';
                } else{
                    echo '<li class="pages_page"><a href="' . esc_url(get_pagenum_link($i)) . '">' ,$i. '</a></li>';
                }
            }
        }
    }
}
  