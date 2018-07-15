<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 18:44
 */
session_start();
if(isset($_SESSION['username'])) {
    echo '恭喜用户 '.$_SESSION['username'].' 登录成功';
    echo '<a href="logout.php">登出</a>';
} else {
    header('Location:index.html');
}
