<?php

// Support To Post Thumbnail.
add_theme_support( 'post-thumbnails' );

/*  存在しないページを指定された場合は 404 ページを表示する  */
function redirect_404() {
    //メインページ・シングルページ・アーカイブ（月別）・固定ページ 以外の指定の場合 404 ページを表示する
    if(is_home() || is_single() || is_search() || is_category() || is_month() || is_day() || is_page()) return;
    include(TEMPLATEPATH . '/404.php');
    exit;
  }
  add_action('template_redirect', 'redirect_404');
  
?>