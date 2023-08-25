<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class test{
            function _print(){
                echo '类名为：'.__CLASS__."<br>";
                echo '函数名为：'.__FUNCTION__;
            }
        }

        $t = new test();
        $t->_print();
    ?>
</body>
</html>
