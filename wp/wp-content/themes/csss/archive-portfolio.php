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
                <li class="breadcrumb-item active" aria-current="page">Works</li>
            </ol>
        </nav>
        <div class="my-5">
            <h2 class="text-center m-4" style="font-size: 400%;">Works</h2>
        </div>

    <!-- ポートフォリオエリア -->
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
              foreach ( $myposts as $post ) : setup_postdata( $post );
          ?>
                <div class="col-sm-4 mb-5">
                    <a href="<?php the_permalink(); ?>">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="/wp-content/themes/csss/common/img/friends_alubm.png" class="card-img-top card-img" alt="...">
                        </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?php the_title() ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                    </a>
                </div>
          <?php
                endforeach;
                endforeach;
              wp_reset_postdata();
          ?>
            </div>
        </div>
    </div>

    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>