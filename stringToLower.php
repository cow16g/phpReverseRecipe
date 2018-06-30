<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アルファベットの大文字から小文字に変換したい</title>
</head>
<body>
    <div>
        <?php
            $text1 = 'THIS IS A PEN';
            echo '<p>変換する文字列 : '. $text1 . '</p><br>';
            echo '<p>すべての文字列を小文字にする(strtolower) : ';
            echo strtolower($text1) . '</p><br><br>';

            $text2 = 'ＴＨＩＳ　ＩＳ　A　ＰＥＮ';   // Aのみ半角
            echo '<p>変換する文字列 : ' . $text2 . '</p><br>';
            echo '<p>全角文字を小文字にする(mb_strtolower) : ';
            echo mb_strtolower($text2) . '</p><br>';
        ?>
    </div>
</body>
</html>