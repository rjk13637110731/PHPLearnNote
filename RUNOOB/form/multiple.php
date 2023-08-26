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
    <select multiple="multiple" name="q[]" >
        <option value="">选择一个站点：</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
</form>
<?php
        }
?>
</body>
</html>
