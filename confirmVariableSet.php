<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>変数がセットされているか調べる</title>
</head>
<body>
    <div>
        <?php
            $a = 'ABC';
            $b = null;
            $c['a'] = 123;

            if (isset($a)) {
                echo '$a はセットされています<br>';
            } else {
                echo '$a はセットされていません<br>';
            }

            if (isset($b)) {
                echo '$b はセットされています<br>';
            } else {
                echo '$b はセットされていません<br>';
            }

            if (isset($c['a'])) {
                echo '$c[\'a\']はセットされています<br>';
            } else {
                echo '$c[\'a\']はセットされていません<br>';
            }

            if (isset($c['b'])) {
                echo '$c[\'b\']はセットされています<br>';
            } else {
                echo '$c[\'b\']はセットされていません<br>';
            }

            if (isset($d)) {
                echo '$dはセットされています<br>';
            } else {
                echo '$dはセットされていません<br>';
            }
        ?>
    </div>
</body>
</html>