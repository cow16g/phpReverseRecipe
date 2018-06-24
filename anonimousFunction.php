<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>無名関数ってなんですか？</title>
</head>
<body>
    <div>
        <?php
            //　処理対象の配列を用意
            $nature = ['water', 'forest', 'tree', 'cloud', 'sun', 'river'];

            // 無名関数を変数にセット
            $filterLess5 = function($text) {
                // データが5文字未満であればtrueを返す
                return strlen($text) < 5;
            };

            // フィルタ処理を行う
            $filteredLess5 = array_filter($nature, $filterLess5);

            // 結果を州立力
            echo '<p>5文字未満のデータ : </p>';
            echo '<ul>';
            foreach ($filteredLess5 as $data) {
                echo '<li>'. h($data). '</li>';
            }
            echo '</ul>';


            // 無名関数を直接コールバック関数に指定してフィルタ処理を行います。
            $filterequal5 = array_filter($nature,
                // データが5文字であればtrueを返します。
                function ($text) {
                    return strlen($text) == 5;
                }
            );

            // 結果を出力します。
            echo '<p>5文字のデータ : </p>';
            echo '<ul>';
            foreach ($filterequal5 as $data) {
                echo '<li>'. h($data). '</li>';
            }
            echo '<ul>';

            function h($string) {
                return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
            }
        ?>
    </div>
</body>
</html>