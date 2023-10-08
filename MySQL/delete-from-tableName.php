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

$sql = "DELETE FROM ruboob_tbl_1
        Where runoob_id=3";
mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die("无法删除数据：".mysqli_error($conn));
}

echo "删除数据成功！";

mysqli_close($conn);
?>
