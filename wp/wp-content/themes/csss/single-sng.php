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
<body>
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb div-area">
              <li class="breadcrumb-item"><a href="/">TOP</a></li>
              <li class="breadcrumb-item"><a href="/sng">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
          </ol>
      </nav>
      <div class="row">
        <div class="col-sm-8">
          <?php if(have_posts()): while(have_posts()):the_post(); ?>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <p><?php the_category(', '); ?></p>
              <p><?php the_content('Read more'); ?></p>
          <?php endwhile; endif; ?>
          <?php
            // previous_post_link('%link','古い記事へ');
            // next_post_link('%link','新しい記事へ');
          ?>
        </div>
        <div class="col-sm-4">
          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>