<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?> style="margin-top: 0px !important">
<head>
<!--Font-->
<link href="https://fonts.googleapis.com/css2?family=Smokum&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

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
            <!--<div class="t_hdr sticky-top">-->
            <!--    <div class="container" style="margin-top: 10px;">-->
            <!--        <div class="row align-items-end">-->
            <!--            <div class="col-lg-2">-->
            <!--                <div class="logo1">-->
                                <a href="<?php echo home_url( '/' ); //トップページのURLを出力 ?>">
            <!--                    <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo.png" alt="logo" width="60" height="40">-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-6">-->
            <!--                <ul class="bxcnt">-->
            <!--                    <li class="font"><a href="<?php echo home_url( '/news/' ); ?>">News</a></li>-->
            <!--                    <li class="font"><a href="<?php echo home_url( '/works/' ); ?>">Works</a></li>-->
            <!--                    <li class="font"><a href="<?php echo home_url( '/project/' ); ?>">Project</a></li>-->
            <!--                    <li class="font"><a href="<?php echo home_url( '/creater/' ); ?>">Creater</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--            <div class="col-lg-4">-->
            <!--                <ul class="bxcnt2">-->
            <!--                    <a href="https://twitter.com/zoopokopoko">-->
            <!--                    <li class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_twitter.png" alt="logo" width="25" height="25"></li>-->
            <!--                    </a>-->
            <!--                    <a href="https://github.com/zoopoko">-->
            <!--                    <li class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/github.png" alt="logo" width="25" height="25"></li>-->
            <!--                    </a>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            
            <!--▼以下PCヘッダー▼-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="pcheadr2">
              <div class="container row zheadr">
                
                <div class="col-lg-1">
                  <a class="navbar-brand" href="<?php echo home_url( '/' );  ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo_giraffe.png" alt="logo" width="60" height="40">
                  </a>
                </div>  
                
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                <div class="col-lg-11">
                <div class="collapse navbar-collapse row" id="Navber">
                    <div class="col-lg-7">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active"style="padding-left: 36px; padding-top: 4.5px">
                            <a class="nav-link" href="https://vt.tiktok.com/ZS45CqH3/">
                              <img class="buruburu" src="<?php echo get_template_directory_uri(); ?>/images/zootok.png" alt="logo" width="91.1" height="33.0">
                              <span class="sr-only">(現位置)</span>
                              
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/zoopokopoko">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/zooitter.png" alt="logo" width="40.2" height="37.15">
                            </a>
                          </li>
                          <li class="nav-item" style="padding-top: 6px;">
                            <a class="nav-link" href="https://github.com/zoopoko">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/github-394322_1280.png" alt="logo" width="60" height="30">
                            </a>
                          </li>
                          <li class="nav-item dropdown fontamaticsc" style="padding-top: 9px;">
                            <a href="#" class="nav-link dropdown-toggle fontmontserrat" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              MENU
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Past Zoo</a>
                              <a class="dropdown-item" href="#">News</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">About Zoo</a>
                            </div>
                          </li>
                        </ul>
                    </div>
                        <!--▼以下検索フォーム-->
                        <form class="form-inline my-2 my-lg-0 ml-auto">
                          <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
                          <button type="submit" class="btn btn-sm ml-2 btn-outline-secondary">検索</button>
                        </form>
                        <!--▲以上検索フォーム-->
                  </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            <!--▲以上PCヘッダー2.0▲-->
            
            
            <!--▼以下SPヘッダー2.0▼-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="spheadr2">
              <div class="container row zheadr">
                
               
                  <a class="navbar-brand" href="<?php echo home_url( '/' );  ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo_giraffe.png" alt="logo" width="60" height="40">
                  </a>
                
                
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                
                <div class="collapse navbar-collapse row" id="Navber">
                    <div class="col-lg-7">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active"style="padding-left: 36px; padding-top: 4.5px">
                            <a class="nav-link" href="#">
                              <img class="buruburu" src="<?php echo get_template_directory_uri(); ?>/images/zootok.png" alt="logo" width="91.1" height="33.0">
                              <span class="sr-only">(現位置)</span>
                              
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/zooitter.png" alt="logo" width="40.2" height="37.15">
                            </a>
                          </li>
                          <li class="nav-item" style="padding-top: 6px;">
                            <a class="nav-link" href="#">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/github-394322_1280.png" alt="logo" width="60" height="30">
                            </a>
                          </li>
                          <li class="nav-item_menu dropdown fontamaticsc" style="padding-top: 9px;">
                            <a href="#" class="nav-link dropdown-toggle fontmontserrat" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              MENU
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Past Zoo</a>
                              <a class="dropdown-item" href="#">News</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">About Zoo</a>
                            </div>
                          </li>
                        </ul>
                    </div>
                        <!--▼以下検索フォーム-->
                        <div class="searchform">
                          <form class="form-inline my-2 my-lg-0 ml-auto">
                            <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
                            <button type="submit" class="btn btn-sm ml-2 btn-outline-secondary">検索</button>
                          </form>
                        </div>
                        <!--▲以上検索フォーム-->
                  </div><!-- /.navbar-collapse -->
              
            </nav>
            <!--▲以上PCヘッダー2.0▲-->
            
            
            
        <!--SPfor.zoo1.1-->
      <!--<div class="sp_hdr">-->
      <!--    <div class="containerx">-->
      <!--        <div class="accbox">-->
                <!--ラベル1-->
      <!--            <label for="label1">-->
      <!--            <img id="mypic" onclick="slideshow()" src="<?php echo get_template_directory_uri(); ?>/images/sns_menu.png" alt="sns" width="60" height="60">-->
      <!--            </label>-->
      <!--            <script>-->
      <!--            var pics_src = new Array("<?php echo get_template_directory_uri(); ?>/images/sns_menu.png","<?php echo get_template_directory_uri(); ?>/images/x.png");-->
      <!--            var num = 0;-->
      <!--            function slideshow(){-->
      <!--                if (num == 1) {-->
      <!--                    num = 0;-->
      <!--                }-->
      <!--                else {-->
      <!--                    num ++;-->
      <!--                }-->
      <!--                document.getElementById("mypic").src=pics_src[num];-->
      <!--            }-->
      <!--            </script>-->
      <!--            <div class="underline"></div>-->
      <!--            <input type="checkbox" id="label1" class="cssacc" />-->
      <!--            <div class="accshow">-->
                    <!--ここに隠す中身-->
      <!--              <p class="sns">-->
      <!--                <a href="https://twitter.com/zoopokopoko">-->
      <!--                <img src="<?php echo get_template_directory_uri(); ?>/images/zoo_twitter.png" alt="sns" width="60" height="60">-->
      <!--                </a>-->
      <!--              </p>-->
      <!--              <p class="sns">  -->
      <!--                <a href="https://github.com/zoopoko">-->
      <!--                <img src="<?php echo get_template_directory_uri(); ?>/images/githubsp.png" alt="logo" width="60" height="60">-->
      <!--                </a>-->
      <!--        		  </p>-->
      <!--            </div>-->
                  <!--//ラベル1-->
      <!--        </div>  -->
      <!--        <div class="accbox">-->
                <!--ラベル2-->
      <!--            <label for="label2"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/zoo_logo.png" alt="logo" width="70" height="70"></a></label>-->
      <!--            <input type="checkbox" id="label2" class="cssacc" />-->
      <!--            <div class="accshow">-->
      <!--            </div>-->
                  <!--//ラベル2-->
      <!--        </div>   -->
      <!--        <div class="accbox">-->
                <!--ラベル3-->
      <!--            <label for="label3">-->
      <!--              <img id="mypic2" onclick="slideshow2()" src="<?php echo get_template_directory_uri(); ?>/images/humberger_menu.png" alt="hm" width="60" height="60">-->
      <!--            </label>-->
      <!--            <script>-->
      <!--            var pics_src2 = new Array("<?php echo get_template_directory_uri(); ?>/images/humberger_menu.png","<?php echo get_template_directory_uri(); ?>/images/x.png");-->
      <!--            var num2 = 0;-->
      <!--            function slideshow2(){-->
      <!--                if (num2 == 1) {-->
      <!--                    num2 = 0;-->
      <!--                }-->
      <!--                else {-->
      <!--                    num2 ++;-->
      <!--                }-->
      <!--                document.getElementById("mypic2").src=pics_src2[num2];-->
      <!--            }-->
      <!--            </script>-->
      <!--            <input type="checkbox" id="label3" class="cssacc" />-->
      <!--            <div class="accshow" style="transform:translateX(-25px);">-->
                    <!--ここに隠す中身-->
      <!--              <div class="boxsp">-->
      <!--                <li class="fontsp"><a href="<?php echo home_url( '/news/' ); ?>">NEWS</a></li>-->
      <!--                <li class="fontsp"><a href="<?php echo home_url( '/works/' ); ?>">WORKS</a></li>-->
      <!--                <li class="fontsp"><a href="<?php echo home_url( '/project/' ); ?>">PROJECT</a></li>-->
      <!--                <li class="fontsp"><a href="<?php echo home_url( '/creater/' ); ?>">CREATER</a></li>-->
      <!--              </div>-->
      <!--            </div>-->
                  <!--//ラベル3-->
      <!--        </div><!--//.accbox-->
      <!--    </div>-->
      <!--    <nav aria-label="breadcrumb">-->
      <!--    	<ol class="breadcrumb">-->
      <!--    		<li class="breadcrumb-item">-->
      <!--    		  <a class="breadcrumb-item" href="<?php echo home_url( '/' ); ?>">Home</a>-->
      <!--    		</li>-->
      <!--    	</ol>-->
      <!--    </nav>-->
      <!--    <section class="container">-->
      <!--      <div class="wrap">-->
      <!--        <div class="pattern"></div>-->
      <!--      </div>-->
      <!--    </section>-->
      <!--    <div class="credit">-->
      <!--      Background courtesy of-->
      <!--      <a href="http://thepatternlibrary.com/#alchemy">The Pattern Library</a>-->
      <!--     </div>-->
      <!--</div><!--sp_hdr.zoo1.1-->
      
    </header>