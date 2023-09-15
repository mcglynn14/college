<?php
    include 'partials/header.php';
    session_start();
    $age = 23;

    // if($age > 20){
    //     echo 'You are ancient';
    // } else{
    //     echo 'You are less ancient';
    // }
?>
<main>
    <p>Hi my name is <?= $_SESSION['name'] ?> and i am
    <?php if($age < 20) : ?>
        <p> young </p>
        <?php else : ?>
            <p> ancient</p>
            <?php endif ?>

</main>
<?php include 'partials/footer.php';?>