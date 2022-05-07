<div class="container">
    <h2>ToDoリスト</h2>
    <?php
    // DBからデータを取得する
    $sql = "SELECT * FROM todolist ORDER BY updated_at;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>内容</th>
            <th>投稿日時</th>
            <th></th>
        </tr>
        <?php
        // DBのデータを表示
        // フェッチモードを使用
        // フェッチモードはPDOでDBからデータを取り出した時”配列の形式を指定するモード”
        // FETCH_ASSOCはどのようにデータを取得するか
        // FETCH_ASSOCはカラム名のみ取得
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["content"] ?></td>
                <td><?= $row["updated_at"] ?></td>
                <td>
                    <a class="btn btn-success" href="edit.php?id=<?= $row["id"] ?>">編集</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="container footer">
    <a class="btn btn-primary" href="create.php">新規投稿</a>
    <a class="btn btn-primary" href="#">履歴一覧</a>
</div>