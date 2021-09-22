<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Factory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/responsive.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <button class="navbar-toggler navbar-dark border-light" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                    <a href="index.php#hero"><img src="./assets/images/image.png" class="img-box" alt="brand"></a>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>

                    <?php
                    

                    if (isset($_SESSION['userId'])) {
                        echo '<form action="../landingPage/lib/inc/logout.inc.php" method="POST">
                        <button type="submit" name="logout_submit" id="logout" class="btn">Log Out</button>
                        </form>';
                    } else {
                        echo '<a href="login.php" class="btn" id="login">Login</button></a>
                        <a href="signup.php" class="btn" id="sign-up">Sign Up</button></a>';
                    }

                    ?>



                </div>
        </nav>
    </header>