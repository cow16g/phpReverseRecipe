<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>&amp;&amp;、||、!</title>
</head>
<body>
    <div>
        <?php
            $a = 8;
            $b = 16;

            if ($a < 10 && $b > 10) {
                $format = '$a(%s)は10よりも小さく、且つ、$b(%s)は10より大きい<br>';
                echo sprintf($format, $a, $b);
            }

            if ($a < 10 && $b < 10) {
                $format = '$a(%s)は10よりも小さく、且つ、$b(%s)は10より小さい<br>';
                echo sprintf($format, $a, $b);
            }

            if ($a > 10 || $b > 10) {
                $format = '$a(%s)は10よりも大きい、または、$b(%s)は10より大きい<br>';
                echo sprintf($format, $a, $b);
            }

            if ($a > 10 || $b < 10) {
                $format = '$a(%s)は10よりも大きい、または、$b(%s)は10より小さい<br>';
                echo sprintf($format, $a, $b);
            }

            if (!($a > 10)) {
                $format = '$a(%s)は10よりも大きくない<br>';
                echo sprintf($format, $a);
            }

            if (!($a < 10)) {
                $format = '$a(%s)は10よりも小さくない<br>';
                echo sprintf($format, $a);
            }
        ?>
    </div>
</body>
</html>