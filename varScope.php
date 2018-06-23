<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>変数のスコープ</title>
</head>
<body>
    <div>
        <?php
            // 変数$aはグローバルスコープの変数
            $a = 'グローバルスコープ$a';
            // 変数$bもグローバルスコープ
            $b = 'グローバルスコープ$b';

            function test()
            {
                // こちらの変数$aはこの関数内でのみ有効なリーかるスコープ変数
                // グローバル変数$aとは別の変数になる
                $a = 'ローカル$a';
                echo $a . '<br>';

                // 関数内でグローバル変数を使いたい場合はglobalキーワードを使う
                global $b;
                echo $b . '<br>';
            }

            test();
            echo $a . '<br>';
            echo $b;
        ?>
    </div>
</body>
</html>