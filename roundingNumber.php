<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数値の丸め(四捨五入)、切り上げ、切り捨てをしたい</title>
</head>
<body>
    <div>
        <?php
            $num1 = 123.256;
            $num2 = -123.256;
        ?>

        <ul>
            <li>
                <p>数値を整数に丸める</p>
                <p><?php echo $num1 ?>=><?php echo round($num1)?></p>
            </li>
            <li>
                <p>数値を小数点第二位までに丸める</p>
                <p><?php echo $num1 ?>=><?php echo round($num1, 2)?></p>
            </li>
            <li>
                <p>数値を10のくらいまでに丸める</p>
                <p><?php echo $num1 ?>=><?php echo round($num1, -1)?></p>
            </li>
            <li>
                <p>小数点以下を切り上げる</p>
                <p><?php echo $num1 ?>=><?php echo ceil($num1)?></p>
                <p><?php echo $num2 ?>-><?php echo ceil($num2)?></p>
            </li>
            <li>
                <p>小数点以下を切り捨てる</p>
                <p><?php echo $num1 ?>=><?php echo floor($num1)?></p>
                <p><?php echo $num2 ?>-><?php echo floor($num2)?></p>
            </li>
        </ul>
    </div>
</body>
</html>