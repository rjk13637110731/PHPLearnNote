<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = array(1=>"Google",2=>"Runoob",3=>"Taobao");
        foreach($x as $key=>$value){
            echo "key为 ".$key.",对应的value为 ".$value."<br>";
        }
    ?>
</body>
</html>
