<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 21:38
 */

$dir = './s';

$mydir = opendir($dir);
var_dump($mydir);
if($mydir === false) {
    echo '打开目录失败<br />';
} else {


    closedir($mydir);
}

