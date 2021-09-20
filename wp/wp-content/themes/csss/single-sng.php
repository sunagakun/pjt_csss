<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/css/style.css">
    <title><?php the_title() ?></title>
    <!-- include header -->
    <?php get_header('csss'); ?>
    <!-- include header -->
</head>
<body class="container">
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
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb div-area">
            <li class="breadcrumb-item"><a href="/">CSSS</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
        </ol>
    </nav>
    <div class="row">
      <div class="col-8">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <p><?php the_category(', '); ?></p>
            <p><?php the_content('Read more'); ?></p>
        <?php endwhile; endif; ?>
        <?php previous_post_link('%link','古い記事へ'); ?>
        <?php next_post_link('%link','新しい記事へ'); ?>
      </div>
      <div class="col-4">
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </div>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>