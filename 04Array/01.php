<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 14:57
 */

//创建数组
//array结构方式创建数组
$arr = array('name'=>'AA', 'age'=>22);
//var_dump($arr);
print_r($arr);
echo '<br />';
//初始化方式创建数组
$arr1['name'] = 'ab';
$arr1['age'] = 23;
print_r($arr1);
echo '<br />';
//快速创建数组
$arr2 = ['name'=>'AA', 'age'=>22];
print_r($arr2);
echo '<br />';

//访问数组元素
echo $arr['name'];
echo '<br />';
//追加元素
$arr['sex'] = 'M';
$arr['age'] = 30;
print_r($arr);
var_dump(implode("+",$arr2));

var_dump(isset($arr['age']));
var_dump(isset($arr['test']));
$arr['test'] = "a";
print_r($arr);
echo '<br />';
unset($arr['test']);
print_r($arr);



