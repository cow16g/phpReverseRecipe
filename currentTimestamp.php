<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>現在のタイムスタンプを取得したい</title>
</head>
<body>
    <div>
        <p>現在のタイムスタンプ(time) : <?php echo time() ?></p>
        <p>現在のタイムスタンプ(microtime) : <?php echo microtime() ?></p>
        <?php
            $now = explode(' ', microtime());
            $time = $now[0] + $now[1];
        ?>
        <p>現在のタイムスタンプ(floatで) :  <?php echo sprintf('%0.6f', $time)?></p>
        <p>現在のタイムスタンプ(floatで) :  <?php echo sprintf('%0.6f', microtime(true)) ?></p>
        ?>
    </div>
</body>
</html>