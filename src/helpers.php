<?php

namespace Superman2014\XmlySdk;

if (!function_exists('generateSign')) {
    function generateSign($attributes, $key, $encrypMethod = 'md5')
    {
        ksort($attributes, SORT_STRING);
        $data = base64_encode(urldecode(http_build_query($attributes)));
        $hash = hash_hmac("sha1", $data, $key, true);

        return call_user_func_array($encrypMethod, [$hash]);
    }
}

if (!function_exists('quickRandom')) {
    function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}

if (!function_exists('generateTimeStamp')) {
    function generateTimeStamp()
    {
        return floor(microtime(true)*1000);
    }
}
