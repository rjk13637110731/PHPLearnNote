<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass  = '123456';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if (!$conn){
    die('连接失败'.mysqli_error($conn));
}
echo '连接成功';

$sql = 'DROP DATABASE RUNOOB1';
$retval = mysqli_query($conn,$sql);

if(!$retval){
    die('删除数据库失败'.mysqli_error($conn));
}
echo '删除数据库 RUNOOB1 成功！';

mysqli_close($conn);
?>
