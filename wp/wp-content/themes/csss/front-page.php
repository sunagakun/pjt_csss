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
          <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="d-block w-100 img-main" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="d-block w-100 img-main" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="d-block w-100 img-main" alt="...">
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
    <div class="mt-4" style="height: 200px; weight: 100px; background-color: grey">
      <p>プロフィールエリア保留（これむずいかも）</p>
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
        <img src="/wp-content/themes/csss/common/img/flutter.png" class="card-img-top" alt="...">
        <div class="card-header">
          Flutter
        </div>
      </div>
      </div>
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
        <img src="/wp-content/themes/csss/common/img/flutter.png" class="card-img-top" alt="...">
        <div class="card-header">
          Flutter
        </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card">
        <img src="/wp-content/themes/csss/common/img/flutter.png" class="card-img-top" alt="...">
        <div class="card-header">
          Flutter
        </div>
      </div>
      </div>
    </div>
</div>
    <!-- ポートフォリオエリア -->
    <div class="bg-work my-5">
      <div class="py-5">
        <h3 class="text-center font-white">Works</h3>
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
                <div class="col-sm-4">
                  <div class="card border-secondary">
                  <div class="card-header text-center">
                      <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="card-img-top card-img" alt="...">
                  </div>
                  <div class="card-body">
                      <h5 class="card-title"><?php the_title() ?></h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  </div>
                </div>
          <?php
              endforeach;
              wp_reset_postdata();
          ?>
          </div>
        </div>
        <div class="text-center pt-4">
          <span class="border-btn px-5 py-3" style="background-color: white;">製作実績一覧へ ▶︎</span>
        </div>
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
      <span class="border-btn px-5 py-3">記事一覧へ ▶︎</span>
    </div>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
  </div>
</body>
    <?php get_footer('csss'); ?>
</html>