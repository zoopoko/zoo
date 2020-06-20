<?php get_header(); //header.phpを取得 ?>



<div class="spacetop"></div>

<div class="container flx">
  <div class="row">

    <div class="row col-lg-9">
    <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
    <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
    
    
    <section class="flx" <?php post_class(); //投稿の種類に応じたクラスを付加 ?>>
          <div class="box1">
            <h1><a href="<?php the_permalink(); //投稿（固定ページ）のリンクを取得 ?>"><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h1>
            <?php the_excerpt(); //投稿（固定ページ）の本文を表示 ?>
          </div>
    </section>
    

    <?php endwhile; // 繰り返し終了 ?>
    <?php else : // 条件分岐：投稿が無い場合は ?>

    <h2>投稿が見つかりません。</h2>

    <?php endif; // 条件分岐終了 ?>
    </div>
    <div id="content" class="clearfix box2 col-lg-3">
        <aside>
          <?php get_sidebar(); //sidebar.phpを取得 ?>
        </aside>
    </div>
  </div>
</div>


  

<?php get_footer();