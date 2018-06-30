<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>かな文字を全角カナや半角カナに変換したい</title>
</head>
<body>
    <div>
        <ul>
            <li>
                <?php $text1 = 'ピッコロ'; ?>
                <p>「全角カタカナ」を「半角カタカナ」に変換</p>
                <p>変換する文字列 : <?php echo $text1 ?></p>
                <p><?php echo mb_convert_kana($text1, 'k') ?></p>
            </li>
            <li>
                <?php $text2 = 'ﾀﾝﾊﾞﾘﾝ' ?>
                <p>「半角カタカナ」を「全角カタカナ」に変換</p>
                <p>変換する文字列 : <?php echo $text2 ?></p>
                <p><?php echo mb_convert_kana($text2, 'kV') ?></p>
            </li>
            <li>
                <?php $text3 = 'ぴあの' ?>
                <p>「全角ひらがな」を「半角カタカナ」に変換</p>
                <p>変換する文字列 : <?php echo $text3 ?></p>
                <p><?php echo mb_convert_kana($text3, 'h') ?></p>
            </li>
            <li>
                <?php $text4 = 'ｼﾝﾊﾞﾙ' ?>
                <p>「半角カタカナ」を「全角ひらがな」に変換</p>
                <p>変換する文字列 : <?php echo $text2 ?></p>
                <p><?php echo mb_convert_kana($text2, 'HV') ?></p>
            </li>
            <li>
                <?php $text5 = 'ドラム' ?>
                <p>「全角カタカナ」を「全角ひらがな」に変換</p>
                <p>変換する文字列 : <?php echo $text5 ?></p>
                <p><?php echo mb_convert_kana($text5, 'c') ?></p>
            </li>
            <li>
                <?php $text2 = 'はーもにか' ?>
                <p>「全角ひらがな」を「全角カタカナ」に変換</p>
                <p>変換する文字列 : <?php echo $text2 ?></p>
                <p><?php echo mb_convert_kana($text2, 'C') ?></p>
            </li>
        </ul>
    </div>
</body>
</html>