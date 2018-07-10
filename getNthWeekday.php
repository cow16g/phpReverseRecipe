<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>第三月曜日を求めたい</title>
</head>
<body>
    <div>
        <?php
        echo '<p>2013年7月第三月曜日を計算する</p>';

        $year = 2013;
        $month = 7;
        $week = 3;
        $weekday = 1;

        $timestamp = mktime(0, 0, 0, $month, 0, $year);
        $date = getdate($timestamp);
        $wday = $date['wday'];

        $weekdayLabel = ['日', '月', '火', '水', '木', '金', '土'];
        ?>

        <ul>
            <li>年 : <?php echo $year ?></li>
            <li>月 : <?php echo $month ?></li>
            <li>週 : <?php echo $week ?></li>
            <li>曜日 : <?php echo $weekdayLabel[$wday] ?></li>
        </ul>

        <p>計算結果 :
        <?php
            $ret = getNthWeekday($year, $month, $week, $weekday);
            if ($ret !== false) {
                echo $ret . '日';
            } else {
                echo '該当する日付は存在しません';
            }
        ?>
        </p>

        <?php
            function getNthWeekday($year, $month, $week, $weekday) {
                if ($week < 1 || $week > 5) {
                    return false;
                }
                if ($weekday < 0 || $weekday > 6) {
                    return false;
                }

                $weekdayOfFirst = (int)date('w', mktime(0, 0, 0, $month, 1, $year));

                $firstDay = $weekday - $weekdayOfFirst + 1;
                if ($firstDay <= 0) {
                    $firstDay += 7;
                }

                $resultDay = $firstDay + 7 *($week - 1);

                if (! checkdate($month, $resultDay, $year)) {
                    return false;
                }

                return $resultDay;
            }
        ?>
    </div>
</body>
</html>