<?php

$hostName = "localhost";
$dbUser = "root";
$dbPaswword = "";
$dbName = "loginregistration";
$conn = mysqli_connect($hostName, $dbUser, $dbPaswword, $dbName);
if (!$conn) {
     die("Something went wrong;");
}
?>