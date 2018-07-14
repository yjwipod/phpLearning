<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 20:26
 */

echo date('Y-m-d H:i:s'), '<br />';

//时区
echo date_default_timezone_get(), '<br />';
date_default_timezone_set('Australia/Melbourne');
echo date('Y-m-d H:i:s'), '<br />';
echo date('今天是星期D'), '<br />';

echo gmdate('Y-m-d H:i:s'), '<br />';//永远是GMT时间，无视时区设定

var_dump(getdate());
var_dump(localtime(time(),true));