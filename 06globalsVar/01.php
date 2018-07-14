<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 21:37
 */

$var1 = 'aa';
$var2 = 'bb';
/*echo '<pre>';
print_r($GLOBALS);*/

//global 和 $GLOBALS 的区别
/*
 * global 实质是全局变量的一个引用/指针
 * $GLOBALS 是全局变量本身
 */
function test() {
    global $var1;
    echo $var1, '<br />';
    echo $GLOBALS['var1'], '<br />';
}

test();