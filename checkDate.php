<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付が正しいかどうかチェックしたい</title>
</head>
<body>
    <div>
        <?php
            $year = isset($_POST['year']) ? intval($_POST['year']) : date('Y');
            $month = isset($_POST['month']) ? intval($_POST['month']) : date('m');
            $day = isset($_POST['day']) ? intval($_POST['day']) : date('d');

            $yearSelector = '';     // 年部分のセレクトメニューオプション
            for ($i=1980; $i <= 2040; $i++) {
                $selected = ($i == $year) ? 'selected' : '';
                $yearSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $monthSelector = '';     // 月部分のセレクトメニューオプション
            for ($i=1; $i <= 12; $i++) {
                $selected = ($i == $month) ? 'selected' : '';
                $monthSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $daySelector = '';     // 日部分のセレクトメニューオプション
            for ($i=1; $i <= 31; $i++) {
                $selected = ($i == $day) ? 'selected' : '';
                $daySelector .= '<option '. $selected. '>'. $i. '</option>';
            }

// チェックしたい日付のフォームを出力します
echo <<<END
<form action="checkDate.php" method="post" accept-charset="utf-8">
  <select name="year">$yearSelector</select>年&nbsp
  <select name="month">$monthSelector</select>月&nbsp
  <select name="day">$daySelector</select>日&nbsp
  <input type="submit" name="" value="日付をチェック">
</form>
END;
            $date = $year . '/' . $month . '/' . $day;  // チェックする日付

            // 日付が正しいかどうかをチェック
            if (checkdate($month, $day, $year)) {
                echo '<p>' . $date . ' は正しい日付です。';
            } else {
                echo '<p>' . $date . ' は正しくない日付です。';
            }
        ?>
    </div>
</body>
</html>