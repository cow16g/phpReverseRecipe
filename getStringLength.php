<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列の長さを調べたい</title>
</head>
<body>
    <div>
        <?php
            // シングルバイト文字のみの文字列の長さを調べる
            $text1 = 'abcde12345';
        ?>
        <p>文字列 : <?php echo $text1 ?></p>
        <ul>
            <li>バイト数 -> <?php echo strlen(bin2hex($text1)) / 2 ?>[byte]</li>
            <li>文字数 -> <?php echo mb_strlen($text1) ?>[文字]</li>
        </ul>

        <?php
            // マルチバイト文字のみの文字列の長さを調べる
            $text2 = 'あいうえお１２３４５'
        ?>
        <p>文字列 : <?php echo $text2 ?></p>
        <ul>
            <li>バイト数 -> <?php echo strlen(bin2hex($text2)) / 2 ?>[byte]</li>
            <li>文字数 -> <?php echo mb_strlen($text2) ?>[文字]</li>
        </ul>

        <?php
            // シングルバイト文字、マルチバイト文字が混在する文字列の長さを調べる
            $text3 = 'あいうえお12345'
        ?>
        <p>文字列 : <?php echo $text3 ?></p>
        <ul>
            <li>バイト数 -> <?php echo strlen(bin2hex($text3)) / 2 ?>[byte]</li>
            <li>文字数 -> <?php echo mb_strlen($text3) ?>[文字]</li>
        </ul>
    </div>
</body>
</html>