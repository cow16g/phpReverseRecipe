<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>乱数を生成したい</title>
</head>
<body>
    <div>
        <?php
            // 乱数のシード値を設定する
            mt_srand((double) microtime() * 1000000);
        ?>
        <p>乱数を生成する : 0 ~ <?php echo mt_getrandmax() ?></p>
        <ul>
            <li><?php echo mt_rand() ?></li>
            <li><?php echo mt_rand() ?></li>
            <li><?php echo mt_rand() ?></li>
        </ul>

        <p>5 ~ 20までの乱数を生成する</p>
        <ul>
            <li><?php echo mt_rand(5, 20) ?></li>
            <li><?php echo mt_rand(5, 20) ?></li>
            <li><?php echo mt_rand(5, 20) ?></li>
        </ul>
    </div>
</body>
</html>