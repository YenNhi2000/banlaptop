<?php

$servername = "MYSQL5025.site4now.net";
$username = "a771dd_website";
$password = "laptop123";
$db = "db_a771dd_website";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
