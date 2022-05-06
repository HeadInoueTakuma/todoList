<?php
// DB設定の読込
require_once 'db_conect.php';
// styleの読込
require_once './views/head.tpl.php'; 

// postでidをもらっていたら$idにpostされた値を格納する
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

// SQL作成
$stmt = $pdo->prepare("SELECT * FROM todolist WHERE id = :id");
// 登録するデータをセット
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
// SQL実行
$row = $stmt->execute();

require_once './views/show.tpl.php';