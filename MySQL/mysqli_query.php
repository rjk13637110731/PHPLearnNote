<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if (!$conn){
    die('连接错误：'.mysqli_error($conn));
}
echo '连接成功<br/>';
$sql = 'CREATE DATABASE RUNOOB2';
$retval = mysqli_query($conn,$sql);

if(!$retval){
    die('创建数据库失败：'.mysqli_error($conn));
}
echo '创建数据库 RUNOOB2 成功\n';
mysqli_close($conn);
?>
