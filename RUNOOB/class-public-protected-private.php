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
            public $public = "Public";
            protected $protected = "Protected";
            private $private = "Private";

            function printHello(){
                echo $this->public;
                echo $this->protected;
                echo $this->private;
            }
        }

        $obj = new MyClass();
        echo $obj->public;
        $obj->printHello();

        class MyClass2 extends MyClass{
            protected $protected = "Protected2";

            function printHello(){
                echo $this->public;
                echo $this->protected;
                //echo $this->private;
            }
        }

        $obj2 = new MyClass2();
        echo $obj2->public;
        echo $obj2->private;
        $obj2->printHello();
    ?>
</body>
</html>
