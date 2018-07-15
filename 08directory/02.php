<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 21:45
 */
$dir = './a/';
$dir = './b/c/d';

if(is_dir($dir)) {
    echo $dir,' 目录已存在 <br />';
} else {
    $rs = mkdir($dir, 0777, true);//第三个参数在创建包含子目录时必须为true
    var_dump($rs);
}

$dir = './';
$mydir = opendir($dir);
while($filename = readdir($mydir)) {
    //readdir是会循环读取目录中的内容
    echo '文件名：',$filename,' 类型：', filetype($dir.$filename),'<br />';
}

//scandir返回array
$dirarr = scandir($dir);
print_r($dirarr);
echo '<hr />';
$dirarr = scandir($dir,true);
print_r($dirarr);


closedir($mydir);


