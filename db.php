<?php

$servername = "MYSQL5045.site4now.net";
$username = "a77c96_laptop";
$password = "1q2w3e4r";
$db = "db_a77c96_laptop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}


?>
