<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付セレクトメニューを表示したい</title>
</head>
<body>
    <div>
        <?php
            $from = (int)date('Y');
            $to = $from + 5;
        ?>
        <select name="year">
            <?php for ($i=$from; $i < $to; $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>;
            <?php endfor;?>
        </select>
    </div>
</body>
</html>