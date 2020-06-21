<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?> style="margin-top: 0px !important">
<head>
<meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
<title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>


<!--<script src="./js/jquery-3.1.0.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--<script src="js/jquery-3.3.1.min.js"></script>-->

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet"  href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="index.js"></script>


<?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>
</head>
<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
<div id="body-inside">
    
    <header>
        
        <!--PC-->
            <div class="t_hdr sticky-top">
                <div class="container" style="margin-top: 10px;">
                    <div class="row align-items-end">
                        <div class="col-lg-2">
                            <div class="logo1">
                                <a href="<?php echo home_url( '/' ); //トップページのURLを出力 ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo.png" alt="logo" width="60" height="40">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="bxcnt">
                                <li class="font"><a href="<?php echo home_url( '/news/' ); ?>">NEWS</a></li>
                                <li class="font"><a href="<?php echo home_url( '/works/' ); ?>">WORKS</a></li>
                                <li class="font"><a href="<?php echo home_url( '/project/' ); ?>">PROJECT</a></li>
                                <li class="font"><a href="<?php echo home_url( '/creater/' ); ?>">CREATER</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="bxcnt2">
                                <li class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_twitter.png" alt="logo" width="25" height="25"></li>
                                <a href="https://www.youtube.com/watch?v=QH2-TGUlwu4">
                                <li class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_youtube.png" alt="logo" width="25" height="25"></li>
                                </a>
                                <li class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_insta.png" alt="logo" width="25" height="25"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        <!--SP-->
        
        <div class="sp_hdr">
        <div class="containerx">
            <div class="accbox">
              <!--ラベル1-->
                <label for="label1"><img src="<?php echo get_template_directory_uri(); ?>/images/sns_menu.png" alt="sns" width="60" height="60"></label>
                <div class="underline"></div>
                <input type="checkbox" id="label1" class="cssacc" />
                <div class="accshow">
                  <!--ここに隠す中身-->
                  <p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_twitter.png" alt="sns" width="60" height="60">
                  </p>
                  <p>
                    <a href="https://www.youtube.com/watch?v=QH2-TGUlwu4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_youtube.png" alt="sns" width="60" height="60">
                    </a>
                  </p>
                  <p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_insta.png" alt="sns" width="60" height="60">
                  </p>
                </div>
                <!--//ラベル1-->
            </div>  
            <div class="accbox">
              <!--ラベル2-->
                <label for="label2"><a href="<a href="<?php echo home_url( '/toppage/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo.png" alt="logo" width="70" height="70"></a></label>
                <input type="checkbox" id="label2" class="cssacc" />
                <div class="accshow">
                </div>
                <!--//ラベル2-->
            </div>   
            <div class="accbox">
              <!--ラベル3-->
                <label for="label3"><img src="<?php echo get_template_directory_uri(); ?>/images/humberger_menu.png" alt="hm" width="60" height="60"></label>
                <input type="checkbox" id="label3" class="cssacc" />
                <div class="accshow">
                  <!--ここに隠す中身-->
                  <div class="boxsp">
                    <li class="fontsp"><a href="<?php echo home_url( '/news/' ); ?>">NEWS</a></li>
                    <li class="fontsp"><a href="<?php echo home_url( '/works/' ); ?>">WORKS</a></li>
                    <li class="fontsp"><a href="<?php echo home_url( '/project/' ); ?>">PROJECT</a></li>
                    <li class="fontsp"><a href="<?php echo home_url( '/creater/' ); ?>">CREATER</a></li>
                  </div>
                </div>
                <!--//ラベル3-->
            </div><!--//.accbox-->
          </div>
        </div><!--sp_hdr-->
                
    </header>