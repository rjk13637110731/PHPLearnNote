<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Site{
            var $url;
            var $title;

            function __construct($par1,$par2){
                $this->url = $par1;
                $this->title = $par2;
            }

            function  setUrl($par){
                $this->url = $par;
            }

            function getUrl(){
                echo $this->url."<br>";
            }

            function setTitle($par){
                $this->title = $par;
            }

            function getTitle(){
                echo $this->title."<br>";
            }
        }

        $runoobnew = new Site("www.runoob.com.new","菜鸟教程new");
        $taobaonew = new Site("www.taobao.com.new","淘宝网站new");
        $googlenew = new Site("www.google.com.new","谷歌网站new");

        $runoobnew->getTitle();
        $taobaonew->getTitle();
        $googlenew->getTitle();

        $runoobnew->getUrl();
        $taobaonew->getUrl();
        $googlenew->getUrl();
    ?>
</body>
</html>
