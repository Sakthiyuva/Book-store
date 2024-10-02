<?php
$dbName = "crud";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = mysqli_connect($dbName, $dbHost, $dbUser, $dbPass);
if (!$conn) {
    die("Something went wrong");
}
?>