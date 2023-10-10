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

if (isset($runoob_count)){
    $sql = "SELECT runoob_author,runoob_count
    from runoob_test_tbl
    where runoob_count=$runoob_count";
}else{
    $sql = "SELECT runoob_author,runoob_count
    from runoob_test_tbl
    where runoob_count IS NULL";
}

mysqli_select_db($conn, 'RUNOOB');
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die("无法读取数据：".mysqli_error($conn));
}

echo "<h2>菜鸟教程 MYSQL IS NULL 测试</h2>";
echo '<table border="1"><tr><td>作者</td><td>登录次数</td></tr>';

while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
    echo "<tr><td>{$row['runoob_author']}</td>".
        "<td>{$row['runoob_count']}</td>".
        "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
