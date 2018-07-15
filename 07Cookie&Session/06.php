<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 16:41
 */

session_start();
/*
 * 1. 服务器端生成文件
 * 2. 客户端保存session_id
 *
 */

//要保存到cookie中的会话键值
echo session_name(), '<br />';

//获取会话ID
echo session_id(), '<br />';

echo '<pre>';
print_r($_SESSION);

