<?php

include '../../../config/dbconfig.php';

$bid = $_GET['bid'];
$stmt = $conn->prepare('UPDATE blog b
    set
    b.published = 0
    where b.id = '.$bid.' ');

$stmt->execute();
header("Location: ../../../blog");
?>
