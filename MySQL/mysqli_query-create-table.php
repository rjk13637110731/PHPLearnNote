<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('连接失败：' . mysqli_error($conn));
}
echo '连接成功';

$sql = "CREATE TABLE ruboob_tbl_3(" .
    "runoob_id INT NOT NULL AUTO_INCREMENT," .
    "runoob_title VARCHAR(100) NOT NULL," .
    "runoob_author VARCHAR(40) NOT NULL," .
    "submission_date DATE," .
    "PRIMARY KEY(runoob_id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";
mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die('数据表创建失败:' . mysqli_error($conn));
}
echo '数据表创建成功！\n';

mysqli_close($conn);
?>
