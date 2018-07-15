<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 18:47
 */

session_start();
echo $_SESSION['username'].'已登出';


setcookie(session_id(),session_name(),time()-10,'/');
session_unset();
session_destroy();


header('Location:index.html');
