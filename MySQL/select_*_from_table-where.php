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

$sql = "SELECT runoob_id,runoob_title,runoob_author,submission_date from ruboob_tbl_1 WHERE runoob_author='RUNOOB.COM'";
mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die("无法读取数据：".mysqli_error($conn));
}
echo "<h2>菜鸟教程 MYSQL WHERe 子句测试</h2>";
echo "<table border='1'><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>";
while($row = mysqli_fetch_array($retval,MYSQLI_NUM)){
    echo "<tr><td>{$row[0]}</td>".
        "<td>{$row[1]}</td>".
        "<td>{$row[2]}</td>".
        "<td>{$row[3]}</td>".
        "</tr>";
}

echo "</table>";

mysqli_free_result($retval);
mysqli_close($conn);
?>
