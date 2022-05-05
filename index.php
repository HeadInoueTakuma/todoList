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
    echo date('Y/m/d') . "<br/>\n";
    ?>

    <p><a href="#">履歴</a></p>
    <h2>投稿フォーム</h2>


    <?php

    //例外処理
    try {
         // DBに接続するためのPDOオブジェクトを作成
        $pdo = new PDO("mysql:host=localhost;dbname=lesson;charset-utf8", "root", "root");
        
            $content = $_POST["content"];
    
            // DBに書き込みたい形にsqlを指定
            $sql  = "INSERT INTO todolist (content, updated_at) VALUES (:content, NOW());";
    
            // $stmt変数にprepareメソッドを実行
            $stmt = $pdo->prepare($sql);
    
            // bindValueでsqlに渡す値を指定
            // bindValueはプリペアドステートメントで使用するSQL文の中で変数の値を紐づける為の関数
            // プリペアドステートメントはSQL文に対して変更が効くようにする為の機能
            // $stmtはphpでの慣習でstatementの略
            $stmt->bindValue(":content", $content, PDO::PARAM_STR);
    
            // executeメソッドでプリペアドステートメントを実行する
            $stmt->execute();
    } catch (PDOException $e) {
        //エラー出力
        echo "データベースエラー（PDOエラー）";
        //エラーの詳細を調べたい時はコメントアウトを外す
        var_dump($e->getMessage());
    }
    // print_r($_POST);
    ?>


    <form action="index.php" method="post">
        <label>投稿内容</label>
        <input type="text" name="content">
        <button type="submit">投稿</button>
    </form>

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
</body>

</html>