<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 17:40
 */
if(isset($_GET['ssid'])) {
    $ssid = $_GET['ssid'];
} else {
    $ssid = 'my'.uniqid();
}
session_id($ssid);
session_start();

print_r($_SESSION);

$_SESSION['test1'] = 'newVal1';
print_r($_SESSION);