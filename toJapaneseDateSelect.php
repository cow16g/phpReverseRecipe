<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付を和暦にしたい</title>
</head>
<body>
    <div>
        <?php
            $year = isset($_POST['year']) ? intval($_POST['year']) : date('Y');
            $month = isset($_POST['month']) ? intval($_POST['month']) : date('m');
            $day = isset($_POST['day']) ? intval($_POST['day']) : date('d');

            $yearSelector = '';
            for ($i=1980; $i <= 2040; $i++) {
                $selected = ($i == $year) ? 'selected' : '';
                $yearSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $monthSelector = '';
            for ($i=1; $i <= 12; $i++) {
                $selected = ($i == $month) ? 'selected' : '';
                $monthSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $daySelector = '';
            for ($i=1; $i <= 31; $i++) {
                $selected = ($i == $day) ? 'selected' : '';
                $daySelector .= '<option '. $selected. '>'. $i. '</option>';
            }
echo <<<END
<form action="toJapaneseDateSelect.php" method="post" accept-charset="utf-8">
  <select name="year">$yearSelector</select>
  <select name="month">$monthSelector</select>
  <select name="day">$daySelector</select>
  <input type="submit" name="" value="年度をチェック">
</form>
END;

            $date = $year . '/' . $month . '/' . $day;

            if (checkdate($month, $day, $year)) {
                echo '<p>' . $date . ' は正しい日付です';
            } else {
                echo '<p>' . $date . ' は正しくない日付です';
                exit;
            }

            $timestamp = mktime(0, 0, 0, $month, $day, $year);
            $date = getdate($timestamp);
            $wday = $date['wday'];

            $weekdayLabel = ['日', '月', '火', '水', '木', '金', '土'];

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