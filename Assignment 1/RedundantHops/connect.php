<?php
    //get connect
    $user = 'root';
    $password = '';
    $database = 'data_mahasiswa';
    $server = 'localhost:3306';
    
    $connection = mysqli_connect($server, $user, $password, $database);
    if($connection->connect_error){
        echo "Fail to connect to database: " . $connection->connect_error;
    }
?>