<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    die('连接失败：'.mysqli_error($conn));
}
echo '连接成功';

mysqli_select_db($conn,'RUNOOB');
mysqli_close($conn);
?>
