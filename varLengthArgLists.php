<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>可変長引数の関数を定義する</title>
</head>
<body>
    <div>
        <?php
            // 可変長引数の関数
            function config()
            {
                // 引数の数を代入
                $num = func_num_args();
                // 引数を配列として代入
                $args = func_get_args();

                $config =[];

                // 引数の数だけforeach構文でループ
                foreach ($args as $arg) {
                    // ここではサンプルのため受けた引数をもとに連想配列に代入するだけですが、
                    // 実際はDBに設定を保存するなどが考えられる
                    $config[$arg[0]] = $arg[1];
                }

                echo '引数の数: ' . $num . '<br>';
                echo '内容';
echo '<pre>';
var_dump($config);
echo '</pre>';
            }

            // 設定項目名と設定値を設定
            $config1 = ['設定1', 100];
            $config2 = ['設定2', 200];
            $config3 = ['設定3', 'ABC'];

            // 引数に設定値を渡し関数をよびだす。引数の数はいくらあっても増やせる
            config($config1, $config2, $config3);
        ?>
    </div>
</body>
</html>