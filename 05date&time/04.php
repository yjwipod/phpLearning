<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 20:52
 */

$date = '2017-8-12';
$time = 1359876543;

$intDate = strtotime($date);
echo $intDate ,'<br />';
if($time >= $intDate) {
    echo '大于';
}
else {
    echo '小于';
}
