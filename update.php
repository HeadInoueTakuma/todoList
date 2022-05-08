<?php
// DB設定の読込
require_once 'db_conect.php';

var_dump($_REQUEST);

// 渡って来たidの既存のcontentを渡って来たcontentで上書きする
$stmt = $pdo->prepare('UPDATE todolist SET  content = :content WHERE id = :id');

// sqlを実行
$stmt->execute(array(':content' => $_POST['content'], ':id' => $_POST['id']));

// 一覧画面に戻る
header('Location: index.php');