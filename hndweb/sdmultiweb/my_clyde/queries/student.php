<?php
    $studentNum = $_SESSION['student_num'];
    $student = $conn->prepare("SELECT
    s.student_num,
    s.firstname,
    s.surname,
    s.email,
    c.name,
    c.award,
    c.year
    FROM Student s
    INNER JOIN Course c ON s.fk_course = c.course_id
    
    where s.student_num = $studentNum
    ");
    $student->execute();
    $student->store_result();
    $student->bind_result($student_num, $firstname, $surname, $email, $course, $award, $term);
    $student->fetch();
?>