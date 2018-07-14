<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 22:29
 */

//Cookie之前不能有任何输出如echo等
setcookie('yjw', 'Monash FIT');
setcookie('test','testval',time() + 3600);
setcookie('test1','test1val',time() + 3600,'/');
//echo $_COOKIE['yjw'];