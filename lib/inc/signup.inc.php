<?php

if (isset($_POST['signup_submit'])) {

    require 'dbh.inc.php';

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password_repeat'];

    if (
        empty($firstName) || empty($lastName) || empty($username)
        || empty($email) || empty($password) || empty($passwordRepeat)
    ) {
        header("location: /tugas-lab-pw/signup.php?error=emptyfields&first_name=" . $firstName . "&last_name=" . $lastName . "&username=" . $username . "&email=" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z,A-Z,0-9]*$/", $username, $firstName, $lastName)) {
        header("location: /tugas-lab-pw/signup.php?error=invalidemailusername");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: /tugas-lab-pw/signup.php?error=invalidemail&first_name=" . $firstName . "&last_name=" . $lastName . "&username=" . $username);
        exit();
    } else if (!preg_match("/^[a-z A-Z 0-9]*$/", $username)) {
        header("location: /tugas-lab-pw/signup.php?error=invalidfirst_namelast_nameusername&email=" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("location: /tugas-lab-pw/signup.php?error=passwordcheck&username=" . $username . "&email" . $email);
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";
        $statement = mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: /tugas-lab-pw/signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($statement, "s", $username);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $resultCheck = mysqli_stmt_num_rows($statement);
            if ($resultCheck > 0) {
                header("location: /tugas-lab-pw/signup.php?error=usernametaken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (first_name, last_name, username, user_email, user_password) VALUES (?, ?, ?, ?, ?)";
                $statement = mysqli_stmt_init($connect);
                if (!mysqli_stmt_prepare($statement, $sql)) {
                    header("location: /tugas-lab-pw/signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($statement, "sssss", $firstName, $lastName, $username, $email, $hashedPassword);
                    mysqli_stmt_execute($statement);
                    header("location: /tugas-lab-pw/login.php?signup=success");
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($statement);
    mysqli_close($connect);
} else {
    header("location: /tugas-lab-pw/signup.php");
    exit();
}
