<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $q = isset($_GET['q'])?htmlspecialchars($_GET['q']):'';
        if($q){
            if($q=='RUNOOB'){
                echo '菜鸟教程<br>http://www.runoob.com';
            }else if($q == 'GOOGLE'){
                echo 'Google 搜索<br>http://www.google.com';
            }else if($q == 'TAOBAO'){
                echo '淘宝<br>http://www.taobao.com';
            }
        }else{
?>
<form action="" method="get">
    <input type="radio" name="q" value="RUNOOB">
    <input type="radio" name="q" value="GOOGLE">
    <input type="radio" name="q" value="TAOBAO">
    <input type="submit" value="提交">
</form>
<?php
        }
?>
</body>
</html>
