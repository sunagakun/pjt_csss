<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/css/style.css">
    <title>CSSS</title>
    <!-- include header -->
    <?php get_header('csss'); ?>
    <!-- include header -->
</head>
<body>
    <!-- メインビジュアルエリア -->
    <div id="carouselMainImg" class="carousel slide" data-bs-ride="carousel" style="background-color: #f5deb3;">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselMainImg" data-bs-slide-to="0" class="active" style="color: #red;"></li>
        <li data-bs-target="#carouselMainImg" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselMainImg" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/wp-content/themes/csss/common/img/screen_shot1.png" class="d-block w-100 img-main" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/csss/common/img/screen_shot2.png" class="d-block w-100 img-main" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/csss/common/img/screen_shot3.png" class="d-block w-100 img-main" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselMainImg" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselMainImg" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <div class="container">
    <!-- プロフィールエリア -->
    <!-- <div class="mt-4 d-flex align-items-center justify-content-center" style="height: 200px; weight: 100px; background-color: grey">
      <p style="font-size: 150%;">実装中</p>
    </div> -->
    <!-- <img src="/wp-content/themes/csss/common/img/profile.jpeg" style="height: 100px; width: 100px;"> -->
    <div class="m-5"><h3>Profile</h3></div>
    <div class="card mb-3 mx-auto border-secondary" style="max-width: 70%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img class="bd-placeholder-img" width="100%" height="250" src="/wp-content/themes/csss/common/img/profile.jpeg"></img>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">須長 秀太</h5>
            <経歴>
            <p class="card-text">
              日本工学院八王子専門学校情報処理科卒<br>
              渋谷でバックエンドエンジニア
            </p>
            <好きなもの>
            <p class="card-text">
              ずっと真夜中でいいのに。 / ポーカー / 麻雀 / ポケモン
            </p>
            <a href="/about">
              <p class="card-text" style="text-align: right;"><small>>詳細はこちら</small></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- スキルエリア -->
    <div class="m-5"><h3>Skills</h3></div>
    <div class="row justify-content-around">
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/flutter.png" class="card-img-top" alt="...">
        <div class="card-header">
          Flutter
        </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/php.jpg" class="card-img-top" alt="...">
        <div class="card-header">
          PHP
        </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/kotlin.png" class="card-img-top" alt="...">
        <div class="card-header">
          kotlin
        </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/laravel.png" class="card-img-top" alt="...">
        <div class="card-header">
          Laravel
        </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/docker.jpg" class="card-img-top" alt="...">
        <div class="card-header">
          Docker
        </div>
      </div>
      </div>
    </div>
</div>
    <!-- ポートフォリオエリア -->
    <div class="bg-work my-5">
      <div class="py-5">
        <h3 class="text-center font-white" id="works">Works</h3>
        <div class="container">
          <div class="row justify-content-around py-4">
          <?php
              $args = array(
                'posts_per_page' => 6,
                'post_type'=> 'portfolio'
              );
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post );
          ?>
                <div class="col-sm-4 mb-5">
                <a href="<?php the_permalink(); ?>">
                  <div class="card border-secondary">
                  <div class="card-header text-center">
                      <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="card-img-top card-img" alt="...">
                  </div>
                  <div class="card-body">
                      <h5 class="card-title"><?php the_title() ?></h5>
                      <p class="card-text"><?php echo SCF::get('description_app'); ?></p>
                  </div>
                  </div>
                </a>
                </div>
          <?php
              endforeach;
              wp_reset_postdata();
          ?>
          </div>
        </div>
        <!-- <div class="text-center pt-4">
          <a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">
            <span class="border-btn px-5 py-3" style="background-color: white;">製作実績一覧へ ▶︎</span>
          </a>
        </div> -->
      </div>
    </div>

<div class="container">
    <!-- ブログ一覧エリア -->
    <div class="m-5"><h3>Blog</h3></div>
    <div class="row justify-content-around">
    <?php
        $args = array(
          'posts_per_page' => 9,
          'post_type'=> 'sng'
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
      <div class="col-sm-4 mb-5">
        <a href="<?php the_permalink(); ?>">
          <div class="card border-secondary">
            <div class="card-header text-center">
                <img src="/wp-content/themes/csss/common/img/flutter.png" class="card-img-top card-img" alt="...">
            </div>
              <div class="card-header"><?php the_title() ?></div>
            <div class="card-body">
              <p class="card-text"><?php the_time('Y.m.d'); ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php
        endforeach;
        wp_reset_postdata();
    ?>
    </div>
    <div class="text-center mb-5">
      <a href="<?php echo get_post_type_archive_link( 'sng' ); ?>">
        <span class="border-btn px-5 py-3">記事一覧へ ▶︎</span>
      </a>
    </div>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
  </div>
</body>
<?php get_footer('csss'); ?>
</html>