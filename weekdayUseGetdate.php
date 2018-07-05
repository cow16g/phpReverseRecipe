<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>していした日付の曜日を求めたい</title>
</head>
<body>
    <div>
        <?php
            $timestamp = mktime(0, 0, 0, 10, 1, 2013);
            $date = getdate($timestamp);
            $wday = $date['wday'];

            // 曜日数値を文字列表記に変換するための配列
            $weekdayLabel = ['日', '月', '火', '水', '木', '金', '土'];

            echo '<p>日付 : '. date('Y/m/d', $timestamp). '</p>';
            echo '<p>結果 : '. $wday. '('. $weekdayLabel[$wday]. ')</p>';
        ?>
    </div>
</body>
</html>