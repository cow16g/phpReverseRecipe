<!DOCTYPE html>
<html lang="ja">
<head>
    <meta chaerset="UTF-8">
    <title>日付の表示形式を変えたり、日付の加減算をしたい</title>
</head>
<body>
    <div>
        <p>現在の日時 : </p>
        <?php
            // Dateオブジェクトをnew演算子で作成します
            $now = new Datetime();
        ?>
        <p><?php echo $now->format('Y年m月d日 H時i分s秒'); ?></p>

        <p>
            1年後の日付 : 
            <?php
                $now = new Datetime();
                $now->add(DateInterval::createFromDateString('1 year'));
                echo $now->format('Y年m月d日')
            ?>
        </p>

        <p>
            1ヶ月後の日付 : 
            <?php
                $now = new Datetime();
                $now->add(DateInterval::createFromDateString('1 mohth'));
                echo $now->format('Y年m月d日')
            ?>
        </p>

        <p>
            1日後の日付 : 
            <?php
                $now = new Datetime();
                $now->add(DateInterval::createFromDateString('1 day'));
                echo $now->format('Y年m月d日')
            ?>
        </p>

        <p>
            1時間後の日付 : 
            <?php
                $now = new Datetime();
                $now->add(DateInterval::createFromDateString('1 hour'));
                echo $now->format('H時i分s秒')
            ?>
        </p>

        <p>
            1分前の日付 : 
            <?php
                $now = new Datetime();
                $now->sub(DateInterval::createFromDateString('1 minute'));
                echo $now->format('H時i分s秒')
            ?>
        </p>

        <p>
            1秒後の日付 : 
            <?php
                $now = new Datetime();
                $now->add(DateInterval::createFromDateString('1 second'));
                echo $now->format('H時i分s秒')
            ?>
        </p>

        <p>
            2013年10月1日の次の日 : 
            <?php
                $past = new Datetime('2013-10-01');
                echo 'タイムスタンプ : '. $past->getTimestamp() . ' : ';
                $now->add(DateInterval::createFromDateString('1 day'));
                echo $past->format('Y年m月d日')
            ?>
        </p>

    </div>
</body>
</html>