<?php
    require 'config.php';
    session_start();

    $errorMessage = '';

    if ($stmt = $conn->prepare('SELECT student_num, psw FROM Student WHERE student_num = ?')){

        $stmt->bind_param('i', $_POST['student_num']);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0){
            $stmt->bind_result($student_num, $password);
            $stmt->fetch();

            if (password_verify($_POST['psw'], $password)){

                session_regenerate_id();
                $_SESSION["loggedin"] = TRUE;
                $_SESSION['student_num'] = $student_num;

                header('location: ../s/dashboard');
            } else {
                $errorMessage = 'Incorrect login details!';
                header('Location: ../pages/Login.php');
            }
        } else {
            $errorMessage = 'Incorrect login details!';
            header('Location: ../pages/student/dashboard.php');
        }

        $_SESSION['error_message'] = $errorMessage;
        setcookie("student_num", $_POST['student_num'], time() + 86400, "/");

    }
