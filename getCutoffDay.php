<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>締め日を求めたい</title>
</head>
<body>
    <div>
        <?php
            $cutOffDay = 25;
            $date = mktime(0, 0, 0, 10, 27, 2013);

            echo '<p>締め日 : '. $cutOffDay. '日</p>';
            echo '<p>計算機準備 : '. date('Y/m/d', $date). '</p>';

            $ret = getCutOffDate($cutOffDay, $date);
            if ($ret !== false) {
                echo '<p>結果 : '. date('Y/m/d', $ret). '</p>';
            } else {
                echo '<p>不正な締め日です</p>';
            }

            function getCutOffDate($cutOffDay, $timestamp=false) {
                // タイムスタンプ省略時は現在の日時を計算基準日とします
                if ($timestamp === false) {
                    $timestamp = time();
                }

                // 指定した締め日が1から31の範囲で指定されているか判定します
                if ($cutOffDay < 1 || $cutOffDay > 31) {
                    return false;
                }

                // 計算機準備のタイムスタンプから年、月、日、月末日を取得します
                $date = getdate($timestamp);
                $year = $date['year'];
                $month = $date['mon'];
                $day = $date['mday'];
                $endOfMonth = (int)date('t', $timestamp);

                $fixedCutOffDay = min($endOfMonth, $cutOffDay);

                if ($day > $fixedCutOffDay) {
                    $month++;

                    // 指定締め日と翌月の月末を比較し、小さな方を締め日とする
                    $endOfNextMonth = (int)date('t', mktime(0, 0, 0, $month, 1, $year));
                    $fixedCutOffDay = min($endOfNextMonth, $cutOffDay);
                }

                // 締め日のタイムスタンプを返す
                return mktime(0, 0, 0, $month, $fixedCutOffDay, $year);
            }
        ?>
 ,  </div>
</body>
