<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 15:21
 */

$arr = ['name'=>'AA', 'age'=>22];

print_r($arr);
echo '<br />';

$arr[] = 'M';
print_r($arr);
echo '<br />';

$arr[100] = 'test';
print_r($arr);
echo '<br />';

$arr[] = 'test1';
print_r($arr);
echo '<br />';

//索引数组
$a = [1,2,3,4,5];
print_r($a);
echo '<br />';

//多维数组
$arr3 = [
  'a' => [1,2,3, 'aa'=>[11,22,33]],
  'b' => [4,5,6],
];
var_dump($arr3);
echo '<br />';

//多维数组中的数组元素访问
var_dump($arr3['a']['aa']);