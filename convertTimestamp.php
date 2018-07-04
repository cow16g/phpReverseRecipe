<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列表現の日付をタイムスタンプに変換したい</title>
</head>
<body>
    <div>
        <?php
        //1行分の表組みフォーマット
        $outputFormat = '<tr><td>%s</td><td>%s</td><td>%s</td></tr>';
        ?>
        <table>
            <tr>
                <th>引数にセットした文字列</th>
                <th>タイムスタンプ</th>
                <th>日付</th>
            </tr>
            <?php
                $time = '2013/10/1 12:34:56';
                $dateObj = new DateTime($time);
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);

                $time = '2014-1-1';
                $dateObj = new DateTime($time);
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);

                $time = 'now';
                $dateObj = new DateTime($time);
                $dateObj->add(DateInterval::createFromDateString($time));
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);

                $time = '+1 day';
                $dateObj = new DateTime($time);
                $dateObj->add(DateInterval::createFromDateString($time));
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);

                $time = '+1 year 2 month 3 week';
                $dateObj = new DateTime($time);
                $dateObj->add(DateInterval::createFromDateString($time));
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);

                // 日付として無効な文字列の場合、現在日時になる
                $time = 'Time is Money';
                $dateObj = new DateTime();
                $dateObj->add(DateInterval::createFromDateString($time));
                $timestamp = $dateObj->getTimestamp();
                $date = $dateObj->format('Y-m-d H:i:s');
                echo sprintf($outputFormat, $time, $timestamp, $date);
            ?>
        </table>
    </div>
</body>
</html>