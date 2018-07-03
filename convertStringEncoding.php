<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字エンコードを変換したい</title>
</head>
<body>
    <?php
        $text ='あいうえお１２３４５';
        echo '<p>もとの文字列 : '. $text. '</p>';

        // 文字コードをsift_jis,EUC_JPに変換
        $sjis = mb_convert_encoding($text, 'SJIS');
        $euc = mb_convert_encoding($text, 'EUC-JP');
    ?>
    <p>文字エンコードを変換した文字列(文字化けします)</p>
    <ul>
        <li>SJIS : <?php echo $sjis ?></li>
        <li>EUC-JP : <?php echo $euc ?></li>
    </ul>

    <?php
        // 文字エンコードをshift_jis,EUC-JPからUTF-8に変換します
        $utfSjis = mb_convert_encoding($sjis, 'UTF-8', 'SJIS');
        $utfEuc = mb_convert_encoding($euc, 'UTF-8', 'EUC-JP');
    ?>
    <p>UTF-8に文字エンコードを戻した文字列</p>
    <ul>
        <li>SJIS : <?php echo $utfSjis ?></li>
        <li>EUC-JP : <?php echo $utfEuc ?></li>
    </ul>
</body>
</html>