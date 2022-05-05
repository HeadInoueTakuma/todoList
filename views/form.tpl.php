<div class="container">
        <h2>投稿フォーム</h2>
        <?php
        if (isset($_POST["content"])) {
            //例外処理
            try {
                // DBに接続するためのPDOオブジェクトを作成
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
                header('Location: ./');
                exit;
            } catch (PDOException $e) {
                //エラー出力
                echo "データベースエラー（PDOエラー）";
                //エラーの詳細を調べたい時はコメントアウトを外す
                var_dump($e->getMessage());
            }
        }
        ?>

        <form class="form" action="index.php" method="post">
            <div class="form-group">
                <label class="control-label">投稿内容</label>
                <input class="form-control" type="text" name="content">
            </div>
            <button class="btn btn-primary" type="submit">投稿</button>
        </form>
    </div>