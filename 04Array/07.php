<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 17:08
 */

$arr = [1,3,5,8,3,'8',10];
print_r($arr);
echo '<hr />';

var_dump(array_pop($arr));
print_r($arr);
echo '<hr />';

var_dump(array_push($arr,'aaa'));
print_r($arr);
echo '<hr />';

//var_dump(array_push($arr,'bbb','777'));
print_r($arr);
echo '<hr />';

var_dump(array_sum($arr));