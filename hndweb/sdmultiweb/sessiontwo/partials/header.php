<?php
define('ROOT_DIR', 'http://localhost:8888/college/hndweb/sdmultiweb/sessiontwo/');
$pageTitle = "Liam's site"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT_DIR ?>css/style.css">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?= ROOT_DIR ?>">Home Page</a></li>
            <li><a href="<?= ROOT_DIR ?>page2.php">Page 2</a></li>
            <li><a href="<?= ROOT_DIR ?>page3.php">Page 3</a></li>
            <li><a href="<?= ROOT_DIR ?>page4.php">Page 4</a></li>
        </ul>
    </nav>