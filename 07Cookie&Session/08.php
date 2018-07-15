<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 17:29
 */


session_start();
/*//删除会话变量，不会删除session文件和session id
session_unset(); //等效于$_SESSION = array();
echo session_id(), '<br />';*/
//删除session文件和session id
//session_destroy();
echo session_id(), '<br />';

//要彻底删除session的值，文件以及cookie，需要
session_unset();
session_destroy();
setcookie(session_name(),session_id(),time()-10,'/');