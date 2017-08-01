<?php
require '../config/config.php';
require '../engine/mysql_commands.php';

$link = connection();


var_dump($link);

mysqli_close($link);

?>





















































































































<!--<!DOCTYPE html>
<html>
    <head>
        <title>Галерея Каритинок</title>
    </head>
    <body>
        <form action="" enctype="multipart/form-data" method="post">
            <input type="file" name="upload_file">
            <input type="submit" value="Отправить!">
        </form>
    </body>
</html>-->
