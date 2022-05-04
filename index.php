<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ToDo App</h1>
    <h2>現在の日付</h2>
    <?php
        echo date('Y/m/d')."<br/>\n";
    ?>

    <p><a href="#">履歴</a></p>
    <h2>投稿フォーム</h2>
    <form action="index.php" method="post">
        <label>投稿内容</label>
        <input type="text" name="content">
        <button type="submit">投稿</button>
    </form>

    <?php
        $content = $_POST["content"];
        echo "投稿内容：". $content;
    ?>

    <h2>ToDoリスト</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>期限</th>
            <th>期限</th>
            <th></th>
        </tr>
        <tr>
            <td>test ID</td>
            <td>test title</td>
            <td>test deadline</td>
            <td>test deadline</td>
            <td><a href="#">詳細</a></td>
        </tr>
    </table>

    <?php
    // DBに接続
        $pdo = new PDO("mysql:host=localhost;dbname=lesson;charset-utf8", "root", "root");
    // データの取得
        $sql = "SELECT * FROM todolist ORDER BY update_at;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    // データの表示
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print_r($row);
            echo ("<br/>");
        }
    ?>

</body>

</html>