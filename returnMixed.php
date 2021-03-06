<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>関数から複数の値を受け取る</title>
</head>
<body>
    <div>
        <?php
            function sales($string='')
            {
                $array = ['apple', 'orange', 'grape', 'pear', 'peach', 'mango'];
                if ($string) {
                    $result = in_array($string, $array);
                } else {
                    $result = '';
                }

                return [$array, $result];
            }

            // 果物リストを取得
            list($list, ) = sales();
            echo '<p>お買い得フルーツ一覧<br>';
            foreach ($list as $value) {
                echo $value. '<br>';
            }
            echo '<p>';

            // 果物リストにappleがあるか調べる
            list(,$result) = sales('apple');
            echo '<p>appleはお買い得リストにありますか？<br>';
            if ($result == true) {
                echo '見つかりました!';
            }
            echo '<p>';
        ?>
    </div>
</body>
</html>