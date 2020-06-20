<?php

/**
 * ウィジェットエリアを定義します。
 */
register_sidebar(array(

  'name'          => 'zooのサイドバー',
  'id'            => 'primary-widget-area',
  'description'   => 'サイドバーに表示されるウィジェットエリアです。',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',

));

add_filter( 'the_excerpt_rss', 'mytheme_the_excerpt_rss' );

function mytheme_the_excerpt_rss( $out ) {
	if ( mb_strlen( $out ) > 50 )
		$out = mb_substr( $out, 0, 50 ).'[...]';
	return $out;
}