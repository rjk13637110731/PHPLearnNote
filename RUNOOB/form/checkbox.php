<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $q = isset($_POST['q'])?$_POST['q']:'';
        if(is_array($q)){
            $sites = array(
                'RUNOOB'=>"菜鸟教程: http://www.runoob.com",
                'GOOGLE'=>"Google搜索: http://www.google.com",
                'TAOBAO'=>"淘宝: http://www.taobao.com",
            );
            foreach($q as $val){
                echo $sites[$val]."<br>";
            }
        }else{
?>
<form action="" method="post">
    <input type="checkbox" name="q[]" value="RUNOOB">
    <input type="checkbox" name="q[]" value="GOOGLE">
    <input type="checkbox" name="q[]" value="TAOBAO">
    <input type="submit" value="提交">
</form>
<?php
        }
?>
</body>
</html>
