<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>指定した日付の年度を求めたい</title>
</head>
<body>
    <div>
        <?php
            $time = mktime(0, 0, 0, 2, 15, 2013);
            $startMonth = 4;
        ?>
        <p>日付 : <?php echo date('Y/m/d', $time) ?></p>
        <p>切り替え月 : <?php echo $startMonth ?>月</p>

        <?php
            $ret = getFiscalYear($startMonth, $time);
            if ($ret !== false) {
                echo '<p>年度 : '. $ret . '年度</p>';
            } else {
                echo '<p>不正な年度切り替え月です</p>';
            }

            function getFiscalYear($startMonth, $timestamp = false) {
                if ($startMonth < 1 || $startMonth > 12) {
                    return false;
                }

                if ($timestamp === false) {
                    $date = getdate();
                } else {
                    $date = getdate($timestamp);
                }

                $year = $date['year'];
                $month = $date['mon'] - ($startMonth - 1);
                $result = getdate(mktime(0, 0, 0, $month, 1, $year));

                return $result['year'];
            }
        ?>
    </div>
</body>
</html>