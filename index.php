<?php
require_once './views/head.tpl.php';
?>

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
        <a class="btn btn-primary" href="#">履歴一覧</a>
    </div>
</body>

</html>