<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>指定した日付の曜日を求めたい</title>
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
<form action="weekDayUseGetDateSelect.php" method="post" accept-charset="utf-8">
  <select name="year">$yearSelector</select>
  <select name="month">$monthSelector</select>
  <select name="day">$daySelector</select>
  <input type="submit" name="" value="曜日をチェック">
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
            $wday = (int)date('w', $timestamp);

            $weekdayLabel = ['日', '月', '火', '水', '木', '金', '土'];

            echo '<p>日付: '. date('Y/m/d', $timestamp) . '</p>';
            echo '<p>結果: '. $wday. '('. $weekdayLabel[$wday]. ')</p>';
        ?>
    </div>
</body>
</html>