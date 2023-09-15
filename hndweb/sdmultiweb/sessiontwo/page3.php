<?php
    include 'partials/header.php';
    session_start();
?>
<main>
<p> This website belong to <?= $_SESSION['email'] ?></p>

</main>
<?php include 'partials/footer.php';?>