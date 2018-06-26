<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>他のファイルを取り込んで利用</title>
</head>
<body>
    <?php
        // siteData.phpを取り込んで利用します
        require_once 'siteData.php';

        echo 'サイト名 : ' . $site . '<br>';
        echo '管理者名 : ' . $admin . '<br>';
        echo 'メールアドレス : ' . $email . '<br>';
    ?>
</body>
</html>