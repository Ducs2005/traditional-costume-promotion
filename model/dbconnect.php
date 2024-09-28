<?php 
    $server = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "finalweb_2024";

    $connect = new mysqli($server, $username, $password, $dbname);

    if ($connect->connect_error) {
        die ("Database connection error ".$connect->connect_error);
    }
?>