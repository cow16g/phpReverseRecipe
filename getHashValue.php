<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ハッシュを計算したい</title>
</head>
<body>
    <div>
        <?php
            $text = 'abcde12345';
        ?>
        <p>ハッシュを計算対象の文字列 : <?php echo $text ?></p>
        <ul>
            <li>
                <p>MD5を計算</p>
                <p><?php echo md5($text) ?></p>
            </li>
            <li>
                <p>CRC32多項式計算</p>
                <p><?php echo crc32($text) ?></p>
            </li>
            <li>
                <p>SHA1ハッシュ値を計算</p>
                <p><?php echo sha1($text) ?></p>
            </li>
            <li>
                <p>SHA246を計算</p>
                <p><?php echo hash('sha256', $text) ?></p>
            </li>
        </ul>

        <p>hash()関数で指定できるハッシュアルゴリズム</p>
<pre>
<?php
print_r(hash_algos());
?>
</pre>
    </div>
</body>
</html>