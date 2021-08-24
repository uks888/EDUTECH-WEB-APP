<?php
/* Database connection start */
$servername = "localhost";
$username = "sarfraj";
$password = "E4rM4xVnpMMvejQ7";
$dbname = "hackathon1";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>