<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 16:52
 */

$arr = [1,3,5,8,3,'8',1];
print_r($arr);
echo '<hr />';
var_dump(count($arr));
var_dump(implode(' ',$arr));

var_dump(in_array('1',$arr));
var_dump(array_key_exists(9,$arr));
var_dump(array_keys($arr));
var_dump(array_keys($arr,8));
var_dump(array_keys($arr,8,true));//严格区分数值和类型
var_dump(array_values($arr));
echo '<hr />';

