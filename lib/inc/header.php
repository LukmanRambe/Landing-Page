<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Factory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/responsive.css">


</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="index.php"><img src="./assets/images/logowf-2.png" class="img-box " alt="Website Factory Logo"></a>


                <button class="navbar-toggler navbar-dark border-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mt-2 mt-lg-0">
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
                    <ul class="navbar-nav login-signup">
                        <?php

                        if (isset($_SESSION['userId'])) {
                            echo '<li>
                            <form action="../tugas-lab-pw/lib/inc/logout.inc.php" method="POST">
                                <button type="submit" name="logout_submit" id="logout" class="btn">Log Out</button>
                            </form>
                            </li>';
                        } else {
                            echo '<li class="nav-item text-center"><a href="login.php" class="nav-link">Login</button></a></li>
                                <li><a href="signup.php" class="btn" id="sign-up">Sign Up</button></a></li>';
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>