<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 20:56
 */

$startTime = microtime(true);
//sleep(1);
for($i=0; $i<10000; $i++) {

}
$endTime = microtime(true);

echo '脚本运行耗时', ($endTime-$startTime), '<br />';