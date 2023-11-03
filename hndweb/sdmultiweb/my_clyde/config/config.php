<?php

$hn = "localhost";
$un = "my_clyde_admin";
$pw = "M4Lg7gQxqOtwwmUC";
$db = "my_clyde";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn-> connect_error){
    die("connection failed: " .$db->connect_error);
}
?>