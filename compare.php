<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>2つの値を比較するには？</title>
</head>
<body>
    <div>
        <?php
            $value1 = 10;
            $value2 = 20;

            if ($value1 < $value2) {
                echo '$value1('. $value1. ')は、$value2('. $value2. ')よりも小さい<br>';
            }
        ?>
    </div>
</body>
</html>