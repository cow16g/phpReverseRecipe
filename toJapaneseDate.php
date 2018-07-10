<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付を和暦にしたい</title>
</head>
<body>
    <div>
        <?php
            $year = 2013;
            $month = 10;
            $day = 1;
            echo '<p>西暦' . $year . '/' . $month . '/' . $day . '</p>';
            $ret = toJapaneseDate($year, $month, $day);

            if ($ret !== false) {
                echo '<p>和暦 : ' . $ret . '</p>';
            } else {
                echo '<p>不正な年月日です</p>';
            }

            function toJapaneseDate ($year, $month, $day)
            {
                if (! checkdate($month, $day, $year) || $year < 1873) {
                    return false;
                }
                $date = (int)sprintf('%04d%02d%02d', $year, $month, $day);
                if ($date >= 19890108) {
                    $label = '平成';
                    $localYear = $year - 1988;
                } elseif ($date >= 19261225) {
                    $label = '昭和';
                    $localYear = $year - 1925;
                } elseif ($date >= 19120730) {
                    $label = '大正';
                    $localYear = $year - 1911;
                } else {
                    $label = '明治';
                    $localYear = $year - 1868;
                }

                if ($localYear == 1) {
                    $wareki = $label . '元年';
                } else {
                    $wareki = $label . $localYear . '年';
                }
                return $wareki . $month. '月' . $day . '日';
            }
        ?>
    </div>
</body>
</html>