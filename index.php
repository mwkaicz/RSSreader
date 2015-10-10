<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script src="js/jquery-2.1.4.min.js" />
        <script>
            var xmlDoc = $.parseXML("idnes.cz.feedsportal.com/c/34387/f/625936/index.rss");
            $xml = $(xmlDoc);
            $items = $xml.find("item");
            $('body').text($items);
        </script>
    </body>
</html>
