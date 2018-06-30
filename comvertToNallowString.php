<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>全角英数字を半角に変換したい</title>
</head>
<body>
    <div>
        <?php
            $text = 'ＡＢＣ　１２３';       // ＡＢＣと123の間に全角スペース

            echo '<p>変換する文字列 : ' . $text . '</p>';
        ?>
        <ul>
            <li>
                <p>全角「英数」を半角に変換</p>
                <p><?php echo mb_convert_kana($text, 'r') ?></p>
            </li>
            <li>
                <p>全角「数字」を半角に変換</p>
                <p><?php echo mb_convert_kana($text, 'n') ?></p>
            </li>
            <li>
                <p>全角「英数字」を半角に変換</p>
                <p><?php echo mb_convert_kana($text, 'a') ?></p>
            </li>
            <li>
                <p>全角「英数字」と「スペース」をを半角に変換</p>
                <p><?php echo mb_convert_kana($text, 'as') ?></p>
            </li>
        </ul>
    </div>
</body>
</html>