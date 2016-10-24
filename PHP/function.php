<?php
/**
 * 随机长度字符串
 *
 * @param integer $lenth
 * @param string $characters
 *
 * @return string
 */
if (!function_exists('str_rand')) {
    function str_rand($length = 8, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        if (!is_int($length) || $length < 0) {
            return false;
        }
        $characters_length = strlen($characters) - 1;
        $string            = '';
        for ($i = $length; $i > 0; $i--) {
            $string .= $characters[mt_rand(0, $characters_length)];
        }
        return $string;
    };
}
