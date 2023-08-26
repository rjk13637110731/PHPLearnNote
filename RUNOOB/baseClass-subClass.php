<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class BaseClass{
            function __construct(){
                print "BaseClass 类中构造方法"."<br>";
            }
        }

        class SubClass extends BaseClass{
            function __construct(){
                parent::__construct();
                print "SubClass类中构造方法"."<br>";
            }
        }

        class OtherClass extends BaseClass{

        }

        $obj = new BaseClass();

        $obj = new SubClass();

        $obj = new OtherClass();
    ?>
</body>
</html>
