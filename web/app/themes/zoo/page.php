<?php get_header(); //header.phpを取得 ?>

<div id="content" class="clearfix">
    <aside>
      <?php get_sidebar(); //sidebar.phpを取得 ?>
    </aside>


<article>

<?php if ( have_posts() ) :    // もし投稿があるなら ?>
  投稿を出力する前に表示する内容
  <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
    投稿の内容を表示
  <?php endwhile;    // 繰り返し処理終了 ?>
  投稿を出力した後に表示する内容
<?php else :    // 投稿がない場合 ?>
  <h2>投稿が見つかりません。</h2><br>
  <div><img src="<?php echo get_template_directory_uri(); ?>/images/zoopoko.gif" width="128" height=" 128"></div>
<?php endif;    // 条件分岐終了 ?>

</article>

</div>

<?php get_footer();