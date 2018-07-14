<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 0:03
 */

/*
 * 用户浏览记录是不断变更的，是多条记录，所以用数组来保存
 * 但是cookie只能保存字符串，如何来保存数组？
 * 解决方案：通过系统内置的 序列化 和 反序列化 函数来实现
 * serialize() 和 unserialize()
 */

/*$arr = [1,2,3];
$a = serialize($arr);
echo $a,'<br />';
echo '<pre>';
print_r(unserialize($a));*/

//1.获取URL地址，使用$_SERVER['REQUEST_URI']；
$url = $_SERVER['REQUEST_URI'];
//echo $url, '<br />';

//2.将URL地址放入到cookie中
//用一个数组来保存URL们
$arr = [];
//先判断是否有浏览记录，如果有，将当前URL放到浏览记录最前面
if(isset($_COOKIE['his'])) {
    $arr = unserialize($_COOKIE['his']); //取出来的是字符串，需要反序列化
    array_unshift($arr,$url);
    //历史记录去重
    $arr = array_unique($arr);

    //只保存最近10条浏览记录
    if (count($arr) > 10) {
        //如果大于10条，则推出最后一条，并在最前端压入一条
        array_pop($arr);
        setcookie('his', serialize($arr));
    } else {
        //再次存放到cookie中
        setcookie('his', serialize($arr));
    }

} else {
    //如果不存在浏览记录，则新建一个浏览记录
    $arr[] = $url;
    //首次设置cookie
    setcookie('his', serialize($arr));
}

echo '历史浏览记录 <br />';
//echo '<pre>';
//print_r($arr);
echo '<ol>';
foreach($arr as $key => $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ol>';


echo '<hr />';
echo '<a href="?id='.mt_rand().'">随机产生一个URL地址</a>';
echo '<br />';
echo '<a href="clear.php">清空历史记录</a>';

