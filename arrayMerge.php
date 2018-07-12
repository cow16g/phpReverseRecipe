<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>配列を結合したい(数値添え字配列の場合)</title>
</head>
<body>
    <div>
        <?php
            $data1 = ['a'];
            $data2 = ['A', '100' => 'B'];
        ?>
        <p>もとの配列<br>
        <?php print_r($data1) ?>
        <br>
        <?php print_r($data2) ?>
        </p>

        <ul>
            <li>
                <p>array_merge()関数で結合</p>
                <pre>
                    <?php print_r(array_merge($data1, $data2)) ?>
                </pre>
            </li>
            <li>
                <p>array_merge_recursive()関数で結合</p>
                <pre>
                    <?php print_r(array_merge_recursive($data1, $data2)); ?>
                </pre>
            </li>
            <li>
                <p>+演算子で結合</p>
                <pre>
                    <?php print_r($data1 + $data2) ?>
                </pre>
            </li>
        </ul>
    </div>
</body>
</html>