<?php

$servername = "MYSQL5045.site4now.net";
$username = "a771dd_laptop";
$password = "1q2w3e4r";
$db = "db_a771dd_laptop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
