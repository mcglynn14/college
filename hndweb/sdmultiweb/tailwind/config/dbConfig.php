<?php

// creating database variables
$hn = "localhost";
$un = "dbconnect";
$pw = "x15F0.B2*H_I(Py9";
$db = "students";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>