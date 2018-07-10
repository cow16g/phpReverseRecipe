<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>月末日を求めたい</title>
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
echo <<<END
<form action="endOfMonthSelect.php" method="post" accept-charset="utf-8">
  <select name="year">$yearSelector</select>
  <select name="month">$monthSelector</select>
  <input type="submit" name="" value="曜日をチェック">
</form>
END;
            $timestamp = mktime(0, 0, 0, $month + 1, 0, $year);
            echo "<p> $year 年 $month 月の末日 : ". date('Y/m/d', $timestamp) . '</p>';
        ?>
    </div>
</body>
</html>