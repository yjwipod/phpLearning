<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/14
 * Time: 23:51
 */
//修改cookie
setcookie('yjw','graduate Monash');

//删除cookie, 要注意保持路径与cookie作用路径一致
setcookie('yjw',null);
setcookie('test', '',time() - 10);