<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数値を3桁ごとにカンマ区切りしたい</title>
</head>
<body>
    <div>
        <?php
            $num1 = 100000;
            $num2 = 100;
            $num3 = 1234567890.5;
        ?>
        <p>3桁ごとに区切って表示する</p>
        <ul>
            <li><?php echo $num1 ?> -> <?php echo number_format($num1)?></li>
            <li><?php echo $num2 ?> -> <?php echo number_format($num2)?></li>
            <li><?php echo $num3 ?> -> <?php echo number_format($num3)?></li>
        </ul>

        <p>3桁ごとに区切り、小数点第二位まで表示する</p>
        <ul>
            <li><?php echo $num1 ?> -> <?php echo number_format($num1, 2)?></li>
            <li><?php echo $num2 ?> -> <?php echo number_format($num2, 2)?></li>
            <li><?php echo $num3 ?> -> <?php echo number_format($num3, 2)?></li>
        </ul>
    </div>
</body>
</html>