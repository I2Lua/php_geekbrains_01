<?php

function connection() {
    $link = mysqli_connect('localhost', 'root', '', 'geekshop' , 7000);
    
    return $link;
}

function command($mysql_connection,$command) {
    if ($mysql_connection == '') {
        $result = mysqli_query(connection(), $command);   
    } else {
        $result = mysqli_query($mysql_connection, $command);
    }
}