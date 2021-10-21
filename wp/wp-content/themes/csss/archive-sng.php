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
    <div class="container">
        <!-- パンくずエリア -->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb div-area">
                <li class="breadcrumb-item"><a href="/">TOP</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
        <div class="my-5">
            <h2 class="text-center m-4" style="font-size: 400%;">Blog</h2>
        </div>

    <div class="container">
        <!-- ブログ一覧エリア -->
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
    </div>
</body>
    <?php get_footer('csss'); ?>
</html>