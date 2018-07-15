<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 17:09
 */

session_start();

$_SESSION['yjw'] = 'Monash';
$_SESSION['test'] = 'testVal';
$_SESSION['age'] = 12;

echo '<pre>';
echo $_SESSION['yjw'], '<br />';
print_r($_SESSION);

//删除session变量
unset($_SESSION['age']);
print_r($_SESSION);

var_dump(isset($_SESSION['test']));
//修改session
$_SESSION['test'] = 'newval';
print_r($_SESSION);