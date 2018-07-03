<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数値を必ず小数点以下まで表示させたい</title>
</head>
<body>
    <div>
        <?php
            $num1 = 10;
            $num2 = 1000.5;
            $num3 = 0.456789;
        ?>
        <p>sprintf()関数で小数点第二位まで表示させる</p>
        <ul>
            <li><?php echo $num1 ?> -> <?php echo sprintf('%0.2f', $num1) ?></li>
            <li><?php echo $num2 ?> -> <?php echo sprintf('%0.2f', $num2) ?></li>
            <li><?php echo $num3 ?> -> <?php echo sprintf('%0.2f', $num3) ?></li>
        </ul>

        <p>number_format()関数で小数点第二位まで表示させる</p>
        <ul>
            <li><?php echo $num1 ?> -> <?php echo number_format($num1, 2) ?></li>
            <li><?php echo $num2 ?> -> <?php echo number_format($num2, 2) ?></li>
            <li><?php echo $num3 ?> -> <?php echo number_format($num3, 2) ?></li>
        </ul>

        <p>number_format()関数で小数点第二位まで表示させる(カンマ区切り無し)</p>
        <ul>
            <li><?php echo $num1 ?> -> <?php echo number_format($num1, 2, '.', '') ?></li>
            <li><?php echo $num2 ?> -> <?php echo number_format($num2, 2, '.', '') ?></li>
            <li><?php echo $num3 ?> -> <?php echo number_format($num3, 2, '.', '') ?></li>
        </ul>
    </div>
</body>
</html>