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
    <!--  -->
    <form class="form" action="update.php" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value=" <?= $result["id"] ?>">
            <label class="control-label">編集</label>
            <input class="form-control" type="text" name="content" value="<?= $result["content"] ?>">
        </div>
        <div class="text-right">
            <button class="btn btn-success" type="submit">更新</button>
            <a class="btn btn-danger" href="destroy.php?id=<?= $result["id"] ?>">削除</a>
        </div>
    </form>
</div>
<div class="container footer">
    <a class="btn btn-primary" href="index.php">一覧画面</a>
    <a class="btn btn-primary" href="#">履歴一覧</a>
</div>