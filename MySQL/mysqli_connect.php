<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $conn) {
    die('Could not connect:' . mysqli_error());
}
echo '数据库连接成功！';
mysqli_close($conn);
?>
