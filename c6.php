<?php
require 'config.php';
$_pass=sha1($_POST['login_pass']);
$query=mysql_query("SELECT user ,passer FROM user WHERE user='{$_POST['login_user']}' and pass ='{$_POST['login_pass']}'") or die('sql错误');
if(mysql_fetch_array($query,MYSQL_ASSOC)){
    echo 'true';      
}else{
    echo 'false';
} 
mysql_close();
?>