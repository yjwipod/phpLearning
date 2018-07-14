<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 16:19
 */

$arr = ['name'=>'AA', 'age'=>22,'sex'=>'M'];
print_r($arr);
echo '<hr />';

//list配合each遍历array
//each执行完成后，数组指针向后移
/*var_dump(each($arr));//name
var_dump(each($arr));//age
var_dump(each($arr));//sex
var_dump(each($arr));//false*/

/*list($key,$value) = each($arr);
echo $key, '=>' ,$value,'<br />';
list($key,$value) = each($arr);
echo $key, '=>' ,$value,'<br />';
list($key,$value) = each($arr);
echo $key, '=>' ,$value,'<br />';*/

while(list($key,$value) = each($arr)) {
    echo $key, '=>' ,$value,'<br />';
}


