<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付セレクトメニューを表示したい</title>
</head>
<body>
    <div>
        <?php
            $from = mktime(0, 0, 0, 6, 1, 2009);
            $to = mktime(0, 0, 0, 10, 1, 2020);
        ?>
        <select name="yearMonth">
            <?php
                $current = $from;
                while ($current <= $to) {
                    $label = date('Y年 m月', $current);
                    $value = date('Ym', $current);
            ?>
                    <option value="<?php echo $value ?>"><?php echo $label ?></option>
            <?php
                    $date = getdate($current);
                    $current = mktime(0, 0, 0, $date['mon']+1, 1, $date['year']);
                }
            ?>
        </select>
    </div>
</body>
</html>