<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die("连接失败：" . mysqli_error($conn));
}
echo "连接成功！<br/>";

mysqli_query($conn, "set names utf8");

$sql = "UPDATE ruboob_tbl_1
        set runoob_title='学习 Python'
        Where runoob_id=3";
mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die("无法更新数据：".mysqli_error($conn));
}

echo "更新数据成功！";

mysqli_close($conn);
?>
