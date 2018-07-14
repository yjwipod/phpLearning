<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 20:40
 */

//echo @mktime(), '<br />';
$t = mktime(22,42,30,7,7,2018);
echo $t, '<br />';
echo date('Y-m-d H:i:s', $t), '<br />';
echo strtotime('7/7/2018 22:42:30'), '<br />';

echo strtotime('-2 day'), '<br />';
echo date('Y-m-d H:i:s', strtotime('+3 days')), '<br />';

var_dump(checkdate(12,3,2017));