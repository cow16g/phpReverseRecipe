<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>生年月日から現在の年齢を求めたい</title>
</head>
<body>
    <div>
        <?php
            $birthYear = isset($_POST['birthYear']) ? intval($_POST['birthYear']) : date('Y');
            $birthMonth = isset($_POST['birthMonth']) ? intval($_POST['birthMonth']) : date('m');
            $birthDay = isset($_POST['birthDay']) ? intval($_POST['birthDay']) : date('d');

            $baseYear = isset($_POST['baseYear']) ? intval($_POST['baseYear']) : date('Y');
            $baseMonth = isset($_POST['baseMonth']) ? intval($_POST['baseMonth']) : date('m');
            $baseDay = isset($_POST['baseDay']) ? intval($_POST['baseDay']) : date('d');

            $birthYearSelector = '';
            for ($i=1980; $i <= 2040; $i++) {
                $selected = ($i == $birthYear) ? 'selected' : '';
                $birthYearSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $birthMonthSelector = '';
            for ($i=1; $i <= 12; $i++) {
                $selected = ($i == $birthMonth) ? 'selected' : '';
                $birthMonthSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $birthDaySelector = '';
            for ($i=1; $i <= 31; $i++) {
                $selected = ($i == $birthDay) ? 'selected' : '';
                $birthDaySelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $baseYearSelector = '';
            for ($i=1980; $i <= 2040; $i++) {
                $selected = ($i == $baseYear) ? 'selected' : '';
                $baseYearSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $baseMonthSelector = '';
            for ($i=1; $i <= 12; $i++) {
                $selected = ($i == $baseMonth) ? 'selected' : '';
                $baseMonthSelector .= '<option '. $selected. '>'. $i. '</option>';
            }

            $baseDaySelector = '';
            for ($i=1; $i <= 31; $i++) {
                $selected = ($i == $baseDay) ? 'selected' : '';
                $baseDaySelector .= '<option '. $selected. '>'. $i. '</option>';
            }
echo <<<END
<form action="getAgeSelect.php" method="post" accept-charset="utf-8">
  <select name="birthYear">$birthYearSelector</select>
  <select name="birthMonth">$birthMonthSelector</select>
  <select name="birthDay">$birthDaySelector</select><br>
  <select name="baseYear">$baseYearSelector</select>
  <select name="baseMonth">$baseMonthSelector</select>
  <select name="baseDay">$baseDaySelector</select><br>
  <input type="submit" name="" value="年齢をチェック">
</form>
END;

            $birthdate = $birthYear . '/' . $birthMonth . '/' . $birthDay;

            if (checkdate($birthMonth, $birthDay, $birthYear)) {
                echo '<p>' . $birthdate . ' は正しい日付です';
            } else {
                echo '<p>' . $birthdate . ' は正しくない日付です';
                exit;
            }

            $birthTimestamp = mktime(0, 0, 0, $birthMonth, $birthDay, $birthYear);
            $birthDate = getdate($birthTimestamp);
            $birthWday = $birthDate['wday'];


            $basedate = $baseYear . '/' . $baseMonth . '/' . $baseDay;

            if (checkdate($baseMonth, $baseDay, $baseYear)) {
                echo '<p>' . $basedate . ' は正しい日付です';
            } else {
                echo '<p>' . $basedate . ' は正しくない日付です';
                exit;
            }

            $baseTimestamp = mktime(0, 0, 0, $baseMonth, $baseDay, $baseYear);
            $baseDate = getdate($baseTimestamp);
            $baseWday = $baseDate['wday'];

            $weekdayLabel = ['日', '月', '火', '水', '木', '金', '土'];
        ?>
        <?php
            // 生年月日と計算機準備のタイムスタンプを取得
            $reqBirthDay = mktime(0, 0, 0, $birthMonth, $birthDay, $birthYear);
            $reqBaseDay = mktime(0, 0, 0, $baseMonth, $baseDay, $baseYear);
        ?>

        <p>計算元のタイムスタンプ値</p>
        <ul>
            <li>誕生日 : <?php echo $reqBirthDay ?></li>
            <li>計算機準備 : <?php echo $reqBaseDay ?></li>
        </ul>

        <?php
            $birthDayInt = date('Y/m/d', $birthDay);
            $baseDayInt = date('Y/m/d', $baseDay);
        ?>

        <p>YYYYmmdd形式の数値に変換された値</p>
        <ul>
            <li>誕生日 : <?php echo $birthDayInt ?></li>
            <li>計算基準日 : <?php echo $baseDayInt ?></li>
        </ul>

        <?php
            $birthDayInt = (int)date('Ymd', $reqBirthDay);
            $baseDayInt = (int)date('Ymd', $reqBaseDay);
            // 年連を算出
            $age = (int)(($baseDayInt - $birthDayInt) / 10000);
        ?>
        <p>計算結果 : <?php echo $age ?></p>
    </div>
</body>
</html>