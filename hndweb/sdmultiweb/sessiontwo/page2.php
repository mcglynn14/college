<?php
    include 'partials/header.php';
    session_start();
?>
<main>
<p> This website belong to <?= $_SESSION['name'] ?></p>

</main>
<?php include 'partials/footer.php';?>