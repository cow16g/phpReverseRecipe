<?php
function generateSecureRandomString($length, $elem = false)
{
    if ($length == 0) {
        return '';
    }

    if ($elem == false) {
        $elem = 'abcdefghijklmnopqrstuvwxyz';
    }

    // if (! preg_match('/¥A[¥x21-¥x7e]+¥z/', $elem)) {
    //     die('ランダム生成のための文字列に不正な文字が含まれています');
    // }

    $chars = preg_split('//', $elem, -1, PREG_SPLIT_NO_EMPTY);

    $chars = array_unique($chars);

    $bytes = getRandomBytes($length);
    if (strlen($bytes) <= 0) {
        echo 'パスワードの生成に失敗しました<br>';
        return '';
    }

    $str = '';
    $charsLen = count($chars);
    for ($i=0; $i < $length; $i++) {
        // バイト文字からASCII値を取得して剰余演算で配列の添字を決定
        $str .= $chars[ord($bytes[$i]) % $charsLen];
    }
    return $str;
}

function getRandomBytes ($length)
{
    $bytes = '';
    if (function_exists('openssl_random_pseudo_bytes')) {
        $bytes = openssl_random_pseudo_bytes($length, $usable);

        // 暗号に強いアルゴリズムで乱数を生成したかどうかを確認
        if ($usable === false) {
            $bytes = '';
        }
    } else {
        echo 'openssl_random_pseudo_bytes()関数は利用できません<br>';
    }
    return $bytes;
}