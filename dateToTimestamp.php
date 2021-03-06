<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付をスタンプに変換</title>
</head>
<body>
    <div>
        <?php
            $year    = 2013;
            $month   = 1;
            $day     = 1;
            $hour    = 10;
            $minute  = 30;
            $second  = 50;

            echo 'mktime()関数 : <br>';
            $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
            echo "日時 : {$year}年{$month}月{$day}日{$hour}時{$minute}分{$second}秒<br>";
            echo 'タイムスタンプ : '. $timestamp. '<br>';
            echo '日付に変換し確認' . date('Y/m/d H:i:s', $timestamp). '<br><br>';

            // 日時の設定
            $year   = 2113;
            $month  = 12;
            $day    = 12;
            $hour   = 23;
            $minute = 15;
            $second = 30;

            $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
            echo "日時 : {$year}年{$month}月{$day}日{$hour}時{$minute}分{$second}秒<br>";
            echo 'タイムスタンプ : '. $timestamp. '<br>';
            echo '日付に変換し確認' . date('Y/m/d H:i:s', $timestamp). '<br><br>';

            echo 'DateTimeクラス : <br>';
            $date = new DateTime("$year/$month/$day $hour:$minute:$second");
            $timestamp = $date->format('U');
            echo "日時 : {$year}年{$month}月{$day}日{$hour}時{$minute}分{$second}秒<br>";
            echo 'タイムスタンプ : '. $timestamp. '<br>';
            $date = new Datetime("@$timestamp");
            $date->setTimezone(new DateTimeZone('Asia/Tokyo'));
            echo '日付に変換し確認 : '. $date->format('Y/m/d H:i:s');
        ?>
    </div>
</body>
</html>