<?php
include 'config/dbConfig.php';
$studentCourse = $conn->prepare('SELECT
s.student_id,
s.student_name,
s.dob,
s.address,
s.tel,
c.course_name,
e.enrolment_date,
e.active



FROM enrolment e 
INNER JOIN course c ON e.fk_course = c.course_id
INNER JOIN student s ON e.fk_student = s.student_id');
$studentCourse->execute();
$studentCourse->store_result();
$studentCourse->bind_result($studentId, $studentName, $dob, $address, $tel, $courseName, $enrolDate, $status);
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">DOB</th>
        <th scope="col">Address</th>
        <th scope="col">Tel</th>
        <th scope="col">Course Name</th>
        <th scope="col">Enrolment Date</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
        <tr><?php while ($studentCourse->fetch()): ?></tr>
        <td><?= $studentId ?></td>
        <td><?= $studentName ?></td>
        <td><?= $dob ?></td>
        <td><?= $address ?></td>
        <td><?= $tel ?></td>
        <td><?= $courseName ?></td>
        <td><?= $enrolDate ?></td>
        <td>
            <?php if ($status == 1) : ?>
                Active
                <?php else : ?>
                    Inactive
                    <?php endif ?>
        </td>
        <!-- <td><?= $status ?></td> -->
        <?php endwhile ?>
    </tbody>
</table>