<?php
// styleの読込
require_once './views/head.tpl.php';
require_once './views/header.tpl.php';
// SQL作成
$stmt = $pdo->prepare("SELECT * FROM todolist WHERE id = :id");
// 登録するデータをセット
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
// SQL実行
$row = $stmt->execute();
?>

<div class="container">
<h2>詳細情報</h2>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>投稿日時</th>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td>
                    <?= $row["id"] ?>
                </td>
                <td><?= $row["content"] ?></td>
                <td><?= $row["updated_at"] ?></td>
            </tr>
        <?php } ?>
    </table>

    <a class="btn btn-primary" href="index.php">一覧に戻る</a>
</div>