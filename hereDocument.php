<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ヒアドキュメント</title>
</head>
<body>
    <div>
        <?php
            $book = 'PHP逆引きレシピ';
            $text = <<<EOL
ヒアドキュメントで変数に文章を代入します<br>
書籍名 : $book;<br>
EOL;
        ?>
    </div>
</body>
</html>