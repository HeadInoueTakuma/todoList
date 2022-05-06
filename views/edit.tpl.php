<div class="container">
    <h2>詳細情報</h2>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>内容</th>
            <th>投稿日時</th>
            <th></th>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td>
                    <?= $row["id"] ?>
                </td>
                <td><?= $row["content"] ?></td>
                <td><?= $row["updated_at"] ?></td>
                <td>
                    <a class="btn btn-danger" href="destroy.php?id=<?= $row["id"] ?>">削除</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="container">
    <a class="btn btn-primary" href="index.php">一覧画面</a>
</div>