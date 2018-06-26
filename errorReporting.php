<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>エラーレベルを設定</title>
</head>
<body>
    <?php
        // すべてのエラーを表示します
        error_reporting(E_ALL);     // PHP5.4以上の場合
        // error_reporting(E_ALL | E_STRICT)   // PHP5.3の場合
        $test = $_POST('test');

        // すべてのエラーを表示させない
        error_reporting(0);
        $dividedByZero = 1 / 0; // warningエラーだが表示されない

        // fatalエラー warningエラー parserエラー Noticeエラーを表示
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        $dividedByZero = 1 / 0; // warningエラー

        // noticeエラー外愛のすべてを表示
        error_reporting(E_ALL ^ E_NOTICE);  // php5.4以上の場合
        // php5.3以前ではE_STRICTを追加する必要があるので以下のように設定する
        // error_reporting(E_ALL ^ E_NOTICE | E_STRICT);
        $test = $_POST['test']; //noticeエラーだが表示されてない
    ?>
</body>
</html>