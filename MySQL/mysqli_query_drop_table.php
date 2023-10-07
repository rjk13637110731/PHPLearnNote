<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('连接失败：' . mysqli_error($conn));
}
echo '连接成功\n';

$sql = "DROP TABLE ruboob_tbl_2";
mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die('数据表删除失败:' . mysqli_error($conn));
}
echo '数据表 ruboob_tbl_2 删除成功！\n';

mysqli_close($conn);
?>
