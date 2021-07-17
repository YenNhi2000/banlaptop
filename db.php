<?php
    $severName = "MYSQL5045.site4now.net";
    $userSever = "a771dd_laptop";
    $passServer = "1q2w3e4r";
    $dbName = "db_a771dd_laptop";

    $conn = mysqli_connect($severName, $userSever, $passServer, $dbName);

    
//    $conn = mysqli_connect("localhost", "root", "", "banlaptop");

    if (mysqli_connect_errno()){
        echo 'Không thể kết nối với database.' .mysqli_connect_errno();
    }
?>
