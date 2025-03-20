<?php
    $host = "localhost";
    $user = "root";
    $password = "root@123";
    $database = "info";
    $port = "3307";
    

    $connect = mysqli_connect($host, $user, $password, $database, $port);

    // echo ($connect) ? "Successfully Connected!" : "Connection Failed";
?>