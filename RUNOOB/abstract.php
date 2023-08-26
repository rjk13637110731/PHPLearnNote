<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        abstract class AbstractClass{
            abstract protected function getValue();

            abstract protected function prefixValue($prefix);

            public function printOut(){
                print $this->getValue()."<br>";
            }
        }

        class ConcreteClass1 extends AbstractClass{
            protected function getValue(){
                return "ConsreteClass1";
            }

            public function prefixValue($prefix){
                return "{$prefix}ConcreteClass1";
            }
        }

        class ConcreteClass2 extends AbstractClass{
            public function getValue(){
                return "ConcreteClass2";
            }

            public function prefixValue($prefix){
                return "{$prefix}ConcreteClass2";
            }
        }

        $class1 = new ConcreteClass1;
        $class1->printOut();
        echo $class1->prefixValue('FOO_');
        echo "<br>";

        $class2 = new ConcreteClass2;
        $class2->printOut();
        echo $class2->prefixValue('FOO__');
        echo "<br>";
    ?>
</body>
</html>
