<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列の前後の空白を削除したい</title>
</head>
<body>
    <div>
        <?php $text = '　　abc　123　　' ?>
        <p>削除前の文字列 <pre>[<?php echo $text ?>]</pre> </p>
        <ul>
            <li><p>前後の空白を削除</p><pre>[<?php echo mb_trim($text) ?>]</pre></li>
            <li><p>先頭の空白を削除</p><pre>[<?php echo mb_ltrim($text) ?>]</pre></li>
            <li><p>末尾の空白を削除</p><pre>[<?php echo mb_rtrim($text) ?>]</pre></li>
        </ul>

        <?php
            // なんかうまくいかん
            // mb_trim()関数
            // 文字列の前後の空白(半角スペース含む)を削除した文字列を返します
            function mb_trim($str) {
                # return mb_ereg_replace('/¥A(¥s|　)+|(¥s|　)+¥z\u/', '', $str);
                return preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $str);
            }

            // mb_ltrim()関数
            // 文字列の先頭の空白(半角スペース含む)を削除した文字列を返します
            function mb_ltrim($str) {
                return mb_ereg_replace('/¥A(¥s|　)+\u/', '', $str);
            }

            // mb_rtrim()関数
            // 文字列の末尾の空白(半角スペース含む)を削除した文字列を返します
            function mb_rtrim($str) {
                return mb_ereg_replace('/(¥s|　)+¥z\u/', '', $str);
            }
        ?>
    </div>
</body>
</html>