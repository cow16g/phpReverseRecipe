<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>三項演算子の使い方を知りたい</title>
</head>
<body>
    <div>
        <?php
            $language = 'jp';
            // 三項演算子の結果を変数に代入します。
            $message = ($language == 'jp') ? '日本語' : 'Japanese';
            echo $message . '<br>';

            // 三項演算子の省略形です。
            $message = $message ?: 'メッセージは空';
            echo $message . '<br>';

            // $messageに空文字を代入します。
            $message = '';
            $message = $message ?: 'メッセージは空';
            echo $message . '<br>';
        ?>
    </div>
</body>
</html>