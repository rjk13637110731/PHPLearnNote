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

mysqli_select_db($conn, 'RUNOOB');

mysqli_query($conn,"SET AUTOCOMMIT=0");
mysqli_begin_transaction($conn);

if (!mysqli_query($conn,"insert into runoob_transaction_test (id) values (8)")){
    mysqli_query($conn,"ROLLBACK");
}
if (!mysqli_query($conn,"insert into runoob_transaction_test (id) values (9)")){
    mysqli_query($conn,"ROLLBACK");
}
mysqli_commit($conn);

mysqli_close($conn);
?>
