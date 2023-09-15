<?php
    include 'partials/header.php';
    session_start();
    $_SESSION['name'] = 'Liam';
    $_SESSION['email'] = '20117993@myclyde.ac.uk';
?>
<main>
<p> This website belong to <?= $pageTitle ?></p>

</main>
<?php include 'partials/footer.php';?>