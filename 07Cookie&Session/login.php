<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 18:39
 */

session_start();

if(isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '123456') {
        //设置session
        $_SESSION['username'] = $username;
        header('Location:user.php');
    } else {
        echo '用户名和密码不匹配';
    }
}