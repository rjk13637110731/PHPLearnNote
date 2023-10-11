<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die("连接失败：" . mysqli_error($conn));
}
echo "连接成功！<br/>";

$db_list = mysqli_query($conn,'SHOW DATABASES');
while($db = mysqli_fetch_object($db_list)){
    echo $db -> Database."<br/>";
}

mysqli_close($conn);
?>
