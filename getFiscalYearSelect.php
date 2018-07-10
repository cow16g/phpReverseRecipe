<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>指定した日付の年度を求めたい(日付選択可能版)</title>
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
<form action="getFiscalYearSelect.php" method="post" accept-charset="utf-8">
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

            $startMonth = 4;
        ?>
        <p>日付 : <?php echo date('Y/m/d', $timestamp) ?></p>
        <p>切り替え月 : <?php echo $startMonth ?>月</p>

        <?php
            $ret = getFiscalYear($startMonth, $timestamp);
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