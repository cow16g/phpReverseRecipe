<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>エラーメッセージを送信したい</title>
</head>
<body>
    <div>
        <?php
            echo __DIR__;
            // エラーメッセージをシステムログに送信
            error_log('エラーが発生しました', 0);

            // エラーメッセージを指定したファイルに記録します
            error_log(rtrim('エラーが発生しました')."\n", 3, '/tmp/data/output/error.log');
        ?>
    </div>
</body>
</html>