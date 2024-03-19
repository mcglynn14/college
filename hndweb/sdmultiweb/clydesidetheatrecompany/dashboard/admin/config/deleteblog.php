<?php
    include '../../../config/dbconfig.php';

    $blogID = $_GET['bid'];

    $deleteBlog = $conn->prepare('DELETE FROM blog (SELECT id FROM blog WHERE id = '.$blogID.')');

    $deleteBlog->execute();

    header('Location: ../../../blog');

    ?>
