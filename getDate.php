<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付や時刻を取得したい</title>
</head>
<body>
    <div>
        <?php
            // 現在の日時から要素を取得します
            $today = getdate();
        ?>
        <p>
            年 : <?php echo $today['year'] ?><br>
            月 : <?php echo $today['mon'] ?><br>
            日 : <?php echo $today['mday'] ?><br>
            曜日 : <?php echo $today['wday'] ?>(日曜 : 0 ~ 土曜 : 6)<br>
            時 : <?php echo $today['hours'] ?><br>
            分 : <?php echo $today['minutes'] ?><br>
            秒 : <?php echo $today['seconds'] ?><br>
            1月1日からの日数 : <?php echo $today['yday'] ?><br>
        </p>

        <p>
            過去のタイムスタンプから要素別に表示<br>
            <?php $past = strtotime('2009-06-29 12:34:56') ?>
            過去のタイムスタンプ : <?php echo $past ?><br>
            <?php
                // 過去のタイムスタンプから要素を取得します
                $past = getdate($past);
            ?>
            年 : <?php echo $past['year'] ?><br>
            月 : <?php echo $past['mon'] ?><br>
            日 : <?php echo $past['mday'] ?><br>
            曜日 : <?php echo $past['wday'] ?>(日曜 : 0 ~ 土曜 : 6)<br>
            時 : <?php echo $past['hours'] ?><br>
            分 : <?php echo $past['minutes'] ?><br>
            秒 : <?php echo $past['seconds'] ?><br>
            1月1日からの日数 : <?php echo $past['yday'] ?>
        </p>
    </div>
</body>
</html>