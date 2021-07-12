<?php
    $severName = "localhost";
    $userSever = "root";
    $passServer = "";
    $dbName = "banlaptop";

    $conn = mysqli_connect($severName, $userSever, $passServer, $dbName);

    if (mysqli_connect_errno()){
        echo 'Không thể kết nối với database.' .mysqli_connect_errno();
    }
?>