<?php
function generateRandomString($length, $elem = false)
{
    if ($length <= 0) {
        return '';
    }

    if ($elem == false) {
        $elem = 'abcdefghijklmnopqrstuvwxyz';
    }

    // 使用文字が1文字以上の記号を含む半角英数字で構成されているか正規表現でチェック
    // if (!preg_match('/¥A[¥x21-¥x7e]+¥z/', $elem)) {
    //     die('ランダム生成のための文字列に不正な文字列が含まれています。');
    // }

    // 使用可能文字を1文字ずつ配列に格納
    $chars = preg_split('//', $elem, -1, PREG_SPLIT_NO_EMPTY);

    // 使用可能文字の配列から重複文字を取り除く
    $chars = array_unique($chars);

    // 乱数のシード値を設定
    mt_srand((double)microtime() * 10000000);

    // 使用可能文字の配列の添字を乱数で指定してランダムな文字を1文字ずつ生成。それを指定文字数になるまで繰り返す
    $str = '';
    $maxIndex = count($chars) - 1;
    for ($i=0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, $maxIndex)];
    }

    return $str;
}