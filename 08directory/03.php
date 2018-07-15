<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 22:02
 */

function test($n = 1) {
    if($n <= 1) {
        return 1;
    } else {
        $res = $n*test($n-1);
        return $res;
    }
}