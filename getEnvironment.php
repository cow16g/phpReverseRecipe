<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>環境変数の情報</title>
</head>
<body>
    <div>
        <?php
            $agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
            $ip    = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
            $ref   = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

            echo 'ブラウザ : '. htmlspecialchars($agent). '<br>';
            echo 'IPアドレス : ' .htmlspecialchars($ip). '<br>';
            echo '参照元 : '. htmlspecialchars($ref). '<br>';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
        ?>
    </div>
</body>
</html>