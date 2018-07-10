<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>生年月日から現在の年齢を求めたい</title>
</head>
<body>
    <div>
        <?php
            // 生年月日と計算機準備のタイムスタンプを取得
            $birthDay = mktime(0, 0, 0, 3, 14, 1983);
            $baseDay = mktime(0, 0, 0, 10, 1, 2013);
        ?>

        <p>計算元のタイムスタンプ値</p>
        <ul>
            <li>誕生日 : <?php echo $birthDay ?></li>
            <li>計算機準備 : <?php echo $baseDay ?></li>
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
            $birthDayInt = (int)date('Ymd', $birthDay);
            $baseDayInt = (int)date('Ymd', $baseDay);
            // 年連を算出
            $age = (int)(($baseDayInt - $birthDayInt) / 10000);
        ?>
        <p>計算結果 : <?php echo $age ?></p>
    </div>
</body>
</html>