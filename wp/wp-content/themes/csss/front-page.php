<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/css/header.css">
    <link rel="stylesheet" href="/wp-content/themes/csss/common/css/style.css">
    <title>CSSS</title>
    <!-- include header -->
    <?php get_header('csss'); ?>
    <!-- include header -->
</head>
<body>
    <div class="mv-area">
        <div class="mv">
            <img class="mv-img" src="/wp-content/themes/csss/common/img/friends_alubm.png">
        </div>
        <p class="mv-title">友達図鑑</p>
    </div>
    <h3>須長の技術ブログ</h3>
    <div class="archive-card">
    <?php
        $args = array(
          'posts_per_page' => 3,
          'post_type'=> 'sng-blog'
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="card card-skin">
            <div class="card__imgframe"></div>
            <div class="card__textbox">
                <div class="card__titletext">
                    <?php the_title(); ?>
                </div>
                <div class="card__overviewtext">
                    概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                </div>
            </div>
        </div>
    <?php
        endforeach;
        wp_reset_postdata();
    ?>
    </div>

</body>
    <!-- include footer -->
    <?php get_footer('csss'); ?>
    <!-- include footer -->
</html>