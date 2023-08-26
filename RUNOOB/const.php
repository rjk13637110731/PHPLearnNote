<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class MyClass{
            const constant = '常量值';

            function showConstant(){
                echo self::constant."<br>";
            }
        }

        echo MyClass::constant."<br>";

        $classname = "MyClass";
        echo $classname::constant."<br>";

        $class = new MyClass();
        $class->showConstant();

        echo $class::constant."<br>";
    ?>
</body>
</html>
