<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 16:43
 */

$arr = ['name'=>'AA', 'age'=>22,'sex'=>'M'];
print_r($arr);
echo '<hr />';
//游标方式遍历
while($value = current($arr)) {
    echo key($arr), ' ', $value, '<br />';
    next($arr);
}
