<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列の一部を取り出したい</title>
</head>
<body>
    <div>
        <?php
            // 半角英数字のみ文字列から一部を取り出します
            $english = 'abcde-12';
            echo '<p>半角英数字(対象の文字列 : '. $english .')</p>';
        ?>
        <p>半角英数字(対象の文字列 : <?php echo $english ?>)</p>
        <ul>
            <li>1文字目から5文字目 : <?php echo mb_substr($english, 0, 5) ?></li>
            <li>3文字目から最後まで : <?php echo mb_substr($english, 2) ?></li>
            <li>最後の4文字 : <?php echo mb_substr($english, -4) ?></li>
        </ul>

        <?php
            // 全角文字のみの文字列から一部を取り出す。
            $japanese = 'あいうえお１２３一二三';
        ?>
        <p>全角文字(対象の文字列 : <?php echo $japanese ?> )</p>
        <ul>
            <li>1文字目から5文字 : <?php echo mb_substr($japanese, 0, 5) ?></li>
            <li>3文字目から最後まで : <?php echo mb_substr($japanese, 2) ?></li>
            <li>最後の4文字 : <?php echo mb_substr($japanese, -4) ?></li>
        </ul>

        <?php
            // 全半角混在の文字列かｒ一部を取り出す
            $bilingual = 'abcあいう一二三123';
        ?>
        <p>全半角混在(対象の文字列 : <?php echo $bilingual ?> )</p>
        <ul>
            <li>1文字目から5文字目 : <?php echo mb_substr($bilingual, 0, 5) ?></li>
            <li>3文字目から最後まで : <?php echo mb_substr($bilingual, 2) ?></li>
            <li>最後の4文字 : <?php echo mb_substr($bilingual, -4) ?></li>
        </ul>
    </div>
</body>
</html>