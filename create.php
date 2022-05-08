<?php
// headの読込
require_once './views/head.tpl.php';

// DB設定の読込
require_once 'db_conect.php';

// // フォームの読込
require_once './views/create.tpl.php';

if ($_POST["content"] && $_POST["term"]) {
    //例外処理
    try {
        // DBに接続するためのPDOオブジェクトを作成
        $content = $_POST["content"];
        $term = $_POST["term"];

        // DBに書き込みたい形にsqlを指定
        $sql  = "INSERT INTO todolist (content, updated_at, term) VALUES (:content, NOW(), :term);";

        // $stmt変数にprepareメソッドを実行
        $stmt = $pdo->prepare($sql);

        // bindValueでsqlに渡す値を指定
        // bindValueはプリペアドステートメントで使用するSQL文の中で変数の値を紐づける為の関数
        // プリペアドステートメントはSQL文に対して変更が効くようにする為の機能
        // $stmtはphpでの慣習でstatementの略
        $stmt->bindValue(":content", $content, PDO::PARAM_STR);
        $stmt->bindValue(":term", $term, PDO::PARAM_STR);

        // executeメソッドでプリペアドステートメントを実行する
        $stmt->execute();
        header('Location: ./');
        exit;
    } catch (PDOException $e) {
        //エラー出力
        echo "データベースエラー（PDOエラー）";
        //エラーの詳細を調べたい時はコメントアウトを外す
        var_dump($e->getMessage());
    }
} elseif(isset($_POST["content"])) {
    //例外処理
    try {
        // DBに接続するためのPDOオブジェクトを作成
        $content = $_POST["content"];
        $term = $_POST["term"];

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
        header('Location: ./');
        exit;
    } catch (PDOException $e) {
        //エラー出力
        echo "データベースエラー（PDOエラー）";
        //エラーの詳細を調べたい時はコメントアウトを外す
        var_dump($e->getMessage());
    }
}

