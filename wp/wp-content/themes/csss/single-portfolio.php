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
    <?php for($i = 0; $i < 20; $i++) {?>
   <p class="text-center">Works詳細ページは実装中〜〜〜</p>
   <?php } ?>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.js"></script>
<script src="/wp-content/themes/csss/common/bootstrap/js/bootstrap.min.js"></script>
</body>
    <?php get_footer('csss'); ?>
</html>