<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザエラーを発生させたい</title>
</head>
<body>
    <div>
        <?php
            $check = 1;

            // ユーザエラーを発生させる
            if ($check == 1) {
                trigger_error('E_USER_NOTICEを発生させます');
                trigger_error('E_USER_WARNINGを発生させます', E_USER_WARNING);
                trigger_error('E_USER_ERRORを派生させます', E_USER_ERROR);
            }

            // E_USER_ERRORで処理が止まるため、これ以降は出力されません
            echo $check;
        ?>
    </div>
</body>
</html>