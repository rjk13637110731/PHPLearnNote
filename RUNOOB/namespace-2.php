<?php
    namespace MyProject\Sub\Level{
        const CONNECT_OK = 1;
        class Connection { /* ... */ }
        function connect() { /* ... */  }
    }

    namespace AnotherProject{
        const CONNECT_OK = 1;
        class Connection { /* ... */ }
        function connect() { /* ... */  }
    }

    namespace {
        session_start();
        $a = MyProject\connect();
        echo MyProject\Connection::start();
    }
?>
