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

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <div class="mt-3 mb-3 text-center">
          <?php $image_url = wp_get_attachment_url(SCF::get('main-img')); ?>
          <img src="<?php echo $image_url; ?>">
        </div>
        <?php echo SCF::get('main-content'); ?>

        <!-- ストア用ボタンエリア -->
        <?php
          $android_store_url = SCF::get('android-store-url');
          $android_img_url   = SCF::get('android-img-url');
        ?>
        <div class="text-center">
          <a href='<?php echo $android_store_url; ?>'>
            <img alt='Get it on Google Play' src='<?php echo $android_img_url; ?>' style="width: 300px;">
          </a>
        </div>
    <?php endwhile; endif; ?>
  </div>

  <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
  <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>