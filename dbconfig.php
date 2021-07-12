<?php
    $severName = "MYSQL5045.site4now.net";
    $userSever = "a771dd_dtdm";
    $passServer = "ádfasdf";
    $dbName = "db_a771dd_dtdm";

    $conn = mysqli_connect($severName, $userSever, $passServer, $dbName);

    if (mysqli_connect_errno()){
        echo 'Không thể kết nối với database.' .mysqli_connect_errno();
    }
?>
