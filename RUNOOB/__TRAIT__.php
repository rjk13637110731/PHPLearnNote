<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Base{
            public function sayHello(){
                echo 'Hello ';
            }
        }

        trait SayWorld{
            public function sayHello(){
                parent::sayHello();
                echo 'World!';
            }
        }

        class MyHelloWorld extends Base{
            use SayWorld;
        }

        $o = new MyHelloWorld();
        $o->sayHello();
    ?>
</body>
</html>
