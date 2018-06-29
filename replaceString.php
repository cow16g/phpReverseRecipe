<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列を置き換えたい</title>
</head>
<body>
    <div>
        <?php
            $text = 'XXaaXXbbXXXccX11XXXX';
            echo '<p>もとの文字列 : ' . $text . '</p>';

            echo '<p>XXを*に変換 : ' . str_replace('XX', '*', $text). '</p>';
            echo '<p>XXを削除 : ' . str_replace('XX', '', $text). '</p>';
        ?>
    </div>
</body>
</html>