<?php
    namespace Foo\Bar;
    include 'file.php';

    const FOO = 2;
    function foo() {}
    class foo
    {
        static function staticmethod() {}
    }

    foo();
    foo::staticmethod();
    echo FOO."<br>";

    subnamespace\foo();
    subnamespace\foo::staticmethod();
    echo subnamespace\FOO."<br>";

    \FOO\Bar\subnamespace\foo();
    \FOO\Bar\subnamespace\foo::staticmethod();
    echo \FOO\Bar\subnamespace\FOO."<br>";
?>
