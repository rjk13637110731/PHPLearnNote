<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Foo{
            public static $my_static = 'foo';

            public function staticValue(){
                return self::$my_static;
            }
        }

        print Foo::$my_static."<br>";
        $foo = new Foo();

        print $foo->staticValue()."<br>";
    ?>
</body>
</html>
