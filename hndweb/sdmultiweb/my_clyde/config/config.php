<?php

$hn = "localhost";
$un = "my_clyde";
$pw = "TBDBDrfa0ewUf379";
$db = "myclyde";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn-> connect_error){
    die("connection failed: " .$db->connect_error);
}
?>