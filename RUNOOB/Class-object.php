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

        $runoob = new Site;
        $taobao = new Site;
        $google = new Site;

        $runoob->setTitle("菜鸟教程");
        $taobao->setTitle("淘宝网站");
        $google->setTitle("Google网站搜索");

        $runoob->setUrl("www.runoob.com");
        $taobao->setUrl("www.taobao.com");
        $google->setUrl("www.google.com");

        $runoob->getTitle();
        $taobao->getTitle();
        $google->getTitle();

        $runoob->getUrl();
        $taobao->getUrl();
        $google->getUrl();
    ?>
</body>
</html>
