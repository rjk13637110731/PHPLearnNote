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

$runoob_title = "学习Python";
$runoob_author = "RUNOOB.COM";
$submission_date = "2016-03-06";

$sql = "INSERT INTO ruboob_tbl_1" .
    "(runoob_title,runoob_author,submission_date)" .
    "values" .
    "('$runoob_title','$runoob_author','$submission_date')";

mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die("无法插入数据：" . mysqli_error($conn));
}
echo "数据插入成功！<br/>";

mysqli_close($conn);
?>
