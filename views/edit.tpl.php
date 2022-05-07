<div class="container">
    <h2>投稿を修正</h2>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>
                <?= $result["id"] ?>
            </td>
        </tr>
        <tr>
            <th>投稿日時</th>
            <td><?= $result["updated_at"] ?></td>
        </tr>
        <tr>
            <th>詳細内容</th>
            <td><?= $result["content"] ?></td>
        </tr>
    </table>

    <a class="btn btn-success" href="#">更新</a>
    <a class="btn btn-danger" href="destroy.php?id=<?= $result["id"] ?>">削除</a>
</div>
<div class="container footer">
    <a class="btn btn-primary" href="index.php">一覧画面</a>
    <a class="btn btn-primary" href="#">履歴一覧</a>
</div>