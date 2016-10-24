<?php

// $arr = [1, 2, 89, 20, 34, 89, 77];

// $arr1 = maopao($arr);
// var_dump($arr);
// var_dump($arr1);
// // sort($arr);
// // var_dump($arr);

// function maopao($arr)
// {
//     for ($i = 0; $i < count($arr); $i++) {
//         for ($j = ($i + 1); $j < (count($arr) - $i - 1); $j++) {
//             if ($arr[$i] < $arr[$j]) {
//                 $temp = $arr[$j];

//                 $arr[$i] = $arr[$j];
//                 $arr[$j] = $temp;
//             }
//         }
//     }
//     return $arr;
// }
// function getpao($arr)
// {
//     $len = count($arr);
//     //设置一个空数组 用来接收冒出来的泡
//     //该层循环控制 需要冒泡的轮数
//     for ($i = 1; $i < $len; $i++) {
//         //该层循环用来控制每轮 冒出一个数 需要比较的次数
//         for ($k = 0; $k < $len - $i; $k++) {
//             if ($arr[$k] > $arr[$k + 1]) {
//                 $tmp         = $arr[$k + 1];
//                 $arr[$k + 1] = $arr[$k];
//                 $arr[$k]     = $tmp;
//             }
//         }
//     }
//     return $arr;
// }

// $arr = ['a', 'b', 'c', 'd' => 'd', 'e'];

// for ($i = 0; $i < count($arr); $i++) {
//     var_dump($arr[$i]);
// }
// var_dump(json_encode($arr));
// unset($arr[0]);
// var_dump(json_encode($arr));
// var_dump($arr[1]);
// array_splice($arr,1,1,'re');
// var_dump($arr);
// var_dump($arr[1]);

$sort              = [];
$sort['area']      = ['香港島', '九龍', '新界'];
$sort['sort']      = 'distance|orders|points';
$sort['category']  = '';
$sort['condition'] = ['coupon' => '1', 'online_pay' => '0', 'open' => '1'];
echo (json_encode($sort));
