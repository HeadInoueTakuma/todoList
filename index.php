<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
    <?php
    // DB設定の読込
    require_once 'db_conect.php';
    // ヘッダの読込
    require_once './views/header.tpl.php';
    // フォームの読込
    require_once './views/form.tpl.php';
    // 記事一覧の読込
    require_once './views/index.tpl.php';
    ?>

    <div class="container history">
        <p><a href="#">履歴</a></p>
    </div>
</body>

</html>