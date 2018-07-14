<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 16:04
 */

$arr = ['name'=>'AA', 'age'=>22];
print_r($arr);
echo '<hr />';
//foreach
foreach ($arr as $key=>$value) {
    echo $key, '=>',$value,'<br />';
}

foreach ($arr as $key=>$value) {
    echo $value,' ';
}
echo '<hr />';

//for
$arr1 = range(1,10,2);
for ($i=0; $i<count($arr1); $i++) {
    echo $arr1[$i], '<br />';
}

