<?php


$hn = "localhost";
$un = "clydeside";
$pw = "_b*6))4X_uAMB)7-";
$db = "clydesidetheatrecompany";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>