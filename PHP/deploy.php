<?php

error_reporting(1);

$target = '/home/wwwroot/shop.omycarapp.com'; // 生产环境web目录

$token    = 'shop';
$wwwUser  = 'www';
$wwwGroup = 'www';

$json = json_decode(file_get_contents('php://input'), true);
if (empty($json['token']) || $json['token'] !== $token) {
    exit('error request');
}

$repo = $json['repository']['name'];

$cmd = "sudo -Hu www cd $target && sudo -Hu www git pull";

$esult = exec($cmd);
exit($result);
