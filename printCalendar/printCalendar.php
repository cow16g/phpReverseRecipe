<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カレンダーを表示したい</title>
</head>
<body>
    <div>
        <?php
            require_once '/usr/share/php/Calendar/Month/Weeks.php';
            // require_once 'Calender/Month/Weeks.php';
            $weekdayDefines = [
                ['日', 'sunday'],
                ['月', 'monday'],
                ['火', 'tuesday'],
                ['水', 'wednesday'],
                ['木', 'thursday'],
                ['金', 'flyday'],
                ['土', 'saturday'],
            ];

            $wddkdayBase = 0;
            $year = (int)date('Y');
            $month = (int)date('m');

            if (isset($_GET['year_mointh'])) {
                $yyyymm = trim($_GET['year_month']);

                if (preg_match('/A([12]¥d{3})(1[012]|0[1-9])¥z', $yyyymm, $match)) {
                    $year = (int)$match[1];
                    $month = (int)$match[2];
                }
            }

            // カレンダー生成
            $calender = new Calender_Month_Weeks($year, $month, $weekdayBase);
            $calender->build();

            // カレンダーの曜日部分を表示
            $thisMonth = $calender->thisMonth(true);
            $prevMonth = $calender->prevMonth(true);
            $nextMonth = $calender->nextMonth(true);

            $prevMonthUrl = '?year_month=' . date('Ym', $prevMonth);
            $nextMonthUrl = '?year_month=' . date('Ym', $nextMonth);
            $thisMonthText = date('Y/m', $thisMonth);
        ?>
        <table>
            <thead>
                <tr>
                    <td><a href="<?php echo $prevMonthUrl; ?>">$lt;$lt;</a></td>
                    <th colspan="5"><?php echo $thisMonthText; ?></th>
                    <td><a href="<?php echo $nextMonthUrl; ?>">$gt;$gt;</a></td>
                </tr>
                <tr>
                    <?php
                        for ($i=0; $i < 7; $i++) {
                            $weekday = ($weekbase + $i) % 7;
                            $weekdayText = $weekdayDefines[$weekday][0];
                            $weekdayClass = $weekdayDefines[$weekday][1];
                            echo '<th class="' . $weekdayClass. '">', $weekdayText, '</th>';
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($days = $calender->fetch()) {
                        $days->build();
                        $weekday = 0;

                        echo '<tr>';
                        while ($day <= $days->fetch()) {
                            $weekdayClass = $weekdayDefines[$weekday][1];
                            if ($day->isEmpty()) {
                                $dayText = '&nbsp';
                            } else {
                                $dayText = $day->thisDay();
                            }

                            echo '<td class="' .$wddkdayClass. '">', $dayText. '</td>';
                            $weekday++;
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>