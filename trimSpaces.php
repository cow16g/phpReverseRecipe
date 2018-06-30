<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字の前後の空白文字を削除したい</title>
</head>
<body>
    <div>
        <?php
            $text = '  abc 123  ';
        ?>
        <p>削除前の文字列 : <?php echo $text ?></p>
        <ul>
            <li><p>前後の空白を削除 : <pre>[<?php echo trim($text) ?>]</pre></p></li>
            <li><p>先頭の空白を削除 : <pre>[<?php echo ltrim($text) ?>]</pre></p></li>
            <li><p>末尾の空白を削除 : <pre>[<?php echo rtrim($text) ?>]</pre></p></li>
        </ul>
    </div>
</body>
</html>