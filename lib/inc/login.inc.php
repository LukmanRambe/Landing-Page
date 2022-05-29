<?php

if (isset($_POST['login_submit'])) {

    require 'dbh.inc.php';

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    if (empty($email) || empty($password)) {
        header("location: /tugas-lab-pw/login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_email=?";
        $statement = mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: /tugas-lab-pw/login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['user_password']);
                if ($passwordCheck == false) {
                    header("location: /tugas-lab-pw/login.php?error=wrongpassword");
                    exit();
                } else if ($passwordCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['email'] = $row['user_email'];

                    header("location: /tugas-lab-pw/index.php?login=success");
                    exit();
                } else {
                    header("location: /tugas-lab-pw/login.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("location: /tugas-lab-pw/login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("location: /tugas-lab-pw/index.php");
    exit();
}
