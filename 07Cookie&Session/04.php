<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 18:09
 */
if(isset($_GET['ssid'])) {
    $ssid = $_GET['ssid'];
} else {
    $ssid = 'my'.uniqid();
}
session_id($ssid);
session_start();

$_SESSION['yjw'] = 'Monash';
$_SESSION['test'] = 'testVal';
$_SESSION['test1'] = 'test1';

echo '<a href="09.php?ssid='.$ssid.'">09.php</a>';