<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ランダムな文字列を生成したい</title>
</head>
<body>
    <div>
        <?php
            // 必要な関数を読み込み
            require('generateRandomString.php');
            require('generateSecureRandomStrig.php');
        ?>

        <p>
            generateRandomString()関数<br>
            10文字のランダムな文字列を生成 : 
            <?php echo generateRandomString(10) ?><br>
            15文字で且つabcde_!#$@のみのランダムな文字列を生成 : 
            <?php echo generateRandomString(15, 'abcde_!#$@') ?>
        </p>

        <p>
            generateSecureRandomString()関数<br>
            10文字のランダムな文字列を生成 ; 
            <?php echo generateSecureRandomString(10) ?><br>
            15文字で且つabcde_!#$@のみのランダムな文字列を生成 : 
            <?php echo generateSecureRandomString(15, 'abcde_!#$@') ?>
        </p>
    </div>
</body>
</html>