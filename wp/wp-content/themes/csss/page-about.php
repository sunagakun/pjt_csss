<?php
/*
Template Name: About
*/
?>

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
        <div class="my-4">
            <h2 class="text-center" style="font-size: 400%;">About</h2>
        </div>
    <!-- プロフィールエリア -->



    <!-- スキルエリア -->
    <div class="m-5"><span><h3><u style="text-decoration-color: #EFA667; text-decoration-thickness: 5px;">Skills</u></h3></span></div>
    <div class="card border-secondary my-5 mx-4">
        <div class="row m-4">
            <div class="col-md-2 text-center">
                <img class="img-thumbnail" src="/wp-content/themes/csss/common/img/flutter.png" max-width="200" max-height="200">
            </div>
            <div class="col-md-10">
                <div class="card-body ml-5">
                    <h5 class="card-title text-secondary">Flutter</h5>
                    <p class="card-text text-secondary text-padding">
                        2021年4月Flutter製アプリ「友達図鑑」リリース。（https://play.google.com/store/apps/details?id=com.sng.friends_alubm）<br>
                        sqliteやRiverpodをはじめ、様々なライブラリの使用しました。<br>
                        経験年数: 6ヶ月<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary my-5 mx-4">
        <div class="row m-4">
            <div class="col-md-2 text-center">
                <img class="img-thumbnail" src="/wp-content/themes/csss/common/img/php.jpg" max-width="200" max-height="200">
            </div>
            <div class="col-md-10">
                <div class="card-body ml-5">
                    <h5 class="card-title text-secondary">PHP</h5>
                    <p class="card-text text-secondary text-padding">
                        実務経験あり。<br>
                        経験年数: 6ヶ月
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary my-5 mx-4">
        <div class="row m-4">
            <div class="col-md-2 text-center">
                <img class="img-thumbnail" src="/wp-content/themes/csss/common/img/kotlin.png" max-width="200" max-height="200">
            </div>
            <div class="col-md-10">
                <div class="card-body ml-5">
                    <h5 class="card-title text-secondary">Kotlin</h5>
                    <p class="card-text text-secondary text-padding">
                        日本工学院八王子専門学校モバイルアプリーケーションコースにて、kotlinを専攻。<br>
                        某メッセンジャーアプリのコピーを実装し、卒業展に展示。<br>
                        経験年数: 1年
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary my-5 mx-4">
        <div class="row m-4">
            <div class="col-md-2 text-center">
                <img class="img-thumbnail" src="/wp-content/themes/csss/common/img/laravel.png" max-width="200" max-height="200">
            </div>
            <div class="col-md-10">
                <div class="card-body ml-5">
                    <h5 class="card-title text-secondary">Laravel</h5>
                    <p class="card-text text-secondary text-padding">
                        実務経験あり。<br>
                        経験年数: 6ヶ月。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary my-5 mx-4">
        <div class="row m-4">
            <div class="col-md-2 text-center">
                <img class="img-thumbnail" src="/wp-content/themes/csss/common/img/docker.jpg" max-width="200" max-height="200">
            </div>
            <div class="col-md-10">
                <div class="card-body ml-5">
                    <h5 class="card-title text-secondary">Docker</h5>
                    <p class="card-text text-secondary text-padding">
                       ちょっとだけできる。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Career -->
    <div class="m-5"><span><h3><u style="text-decoration-color: #EFA667; text-decoration-thickness: 5px;">Career</u></h3></span></div>
    <p class="text-center text-muted">準備中</p>

    <!-- SNS -->
    <div class="m-5"><span><h3><u style="text-decoration-color: #EFA667; text-decoration-thickness: 5px;">SNS</u></h3></span></div>
    <p class="text-center text-muted">準備中</p>
</div>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
    <script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>