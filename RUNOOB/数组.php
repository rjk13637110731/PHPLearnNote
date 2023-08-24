<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cars = array("dazhong","xiaomi","lianxiang","bentian");
    
        for ($i = 0;$i<count($cars);$i++){
            echo $cars[$i];
            echo '<br>';
        }
    ?>
</body>
</html>
