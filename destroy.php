<?php
// DB設定の読込
require_once 'db_conect.php';

// postでidをもらっていたら$idにpostされた値を格納する
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

// SQL作成
$stmt = $pdo->prepare("DELETE FROM todolist WHERE id = :id");
// 登録するデータをセット
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
// SQL実行
$row = $stmt->execute();

// 一覧画面に戻る
header('Location: index.php');