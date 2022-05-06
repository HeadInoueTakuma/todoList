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
</div>
<div class="container">
    <a class="btn btn-primary" href="index.php">一覧画面</a>
</div>