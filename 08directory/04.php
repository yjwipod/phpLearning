<?php
/**
 * Created by PhpStorm.
 * User: yjw
 * Date: 2018/7/15
 * Time: 22:08
 */

function fileSys($dir='./') {
    if(is_dir($dir)) {
        $mydir = opendir($dir);
        echo '<ul>';
        while($filename = readdir($mydir)) {
            if($filename != '.' && $filename != '..') {
                //echo $filename, '<br />';
                $tmpFile = $dir.'/'.$filename;
                //echo $tmpFile, '<br />';
                if(is_dir($tmpFile)) {
                    echo '<li><a href="$filename"><font color="red">'.$filename, '</font></a></li>';
                    fileSys($tmpFile);
                } else {
                    echo '<li>'.$filename, '</li>';
                }
            }
        }
        echo '</ul>';
        closedir($mydir);
    } else {
        echo '不是目录 <br />';
    }


}
echo getcwd().'文件目录树：<br />';
fileSys();

