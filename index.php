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
    <p>履歴</p>
    <h2>ToDoリスト</h2>

    <?php
        // DBに接続
        $pdo = new PDO("mysql:host=localhost;dbname=lesson;charset-utf8", "root", "root");

        // データの取得
        $sql = "SELECT * FROM todolist ORDER BY update_at;";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();

        // データの表示
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        print_r($row);
        echo ("<br/>");
        
    ?>

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
</body>
</html>