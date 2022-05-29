<?php include "./lib/inc/account-header.php" ?>

<main>
    <section id="login-form">

        <div class="container text-center">
            <a href="index.php#hero"><img src="./assets/images/logowf.png" alt="Website Factory Logo" class="login-image"></a>
        </div>

        <h3 class="text-center form-header">Login to Website Factory</h3>
        <div id="login-card" class="container col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <?php
                    if (isset($_GET['signup']) == "success") {
                        echo '<div class="container justify-content-center">
                                            <p class="signup-success">You signed up successfully, login now!</p>
                                         </div>';
                    } else if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<div class="container justify-content-center">
                                            <p class="signup-error">Fill in all fields!</p>
                                         </div>';
                        } else if ($_GET['error'] == "wrongpassword") {
                            echo '<div class="container justify-content-center">
                                            <p class="signup-error">Invalid password!</p>
                                         </div>';
                        } else if ($_GET['error'] == "nouser") {
                            echo '<div class="container justify-content-center">
                                            <p class="signup-error">Invalid username!</p>
                                         </div>';
                        }
                    }

                    ?>
                    <div class="form-group">
                        <form action="../tugas-lab-pw/lib/inc/login.inc.php" method="POST" class="form-group">
                            <input type="email" name="user_email" class="form-control" id="email" placeholder="E-mail"><br>
                            <input type="password" name="user_password" class="form-control" id="password" placeholder="Password"><br>
                            <button type="submit" name="login_submit" id="login" class="btn login">Login</button>
                            <hr>

                            <a href="signup.php" id="sign-up" class="btn">Sign Up</a><br><br>
                            <p class="text-center">Forgot Password? <a href="#">Click Here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>



<?php include "./lib/inc/account-footer.php" ?>