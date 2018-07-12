<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>配列の内容をデバッグ表示したい</title>
</head>
<body>
    <div>
        <?php
            $data = [
                [
                    'string' => '一郎',
                    'bool'   => true,
                ],
                [
                    'string' => '',
                    'float'  => '3.1415'
                ],
                [
                    'int'  => 10,
                    'null' => null,
                ],
            ];
        ?>
        <table>
            <tr>
                <td class="vtop">
                    print_r()関数で表示
                    <pre>
                        <?php print_r($data) ?>
                    </pre>
                </td>
                <td class="vtop">
                    var_dump()関数で表示
                    <pre>
                        <?php var_dump($data) ?>
                    </pre>
                </td>
                <td class="vtop">
                    var_export()関数で表示
                    <pre>
                        <?php var_export($data) ?>
                    </pre>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>