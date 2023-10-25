<?php
    $age = 25;
    $name = "Sarah";
    $isStudent = false;

    // echo $age;
?>
<p>Hi there <?= $name ?>, you are <?= $age ?> </p>

<p>
    <?php if( $isStudent == true) : ?>
    you are currently a student.
    <?php else : ?>
        you need to enrol.
    <?php endif ?>
</p>

<?php
   $score = 80;
   if ($score >= 70) {
echo "Congratulations! You passed the exam.";
} else {
echo "Oops! You did not pass the exam.";
}
?>

<?php
   $score = 50;
?>

<p>
   <?php if($score >= 70) : ?>
      Congratulations! You passed the exam.
   <?php else : ?>
      Oops! You did not pass the exam.  
   <?php endif ?>
</p>