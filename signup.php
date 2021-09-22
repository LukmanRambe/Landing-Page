<?php include "./lib/inc/account-header.php" ?>

<body>


    <main>

        <section id="signup-form">

            <div class="container justify-content-center col-12">
                <a href="index.php#hero"><img src="./assets/images/image.png" alt="Brand Logo" class="signup-image"></a>
            </div>

            <h1 class="text-center form-header mt-3 mb-4">Create Your Account</h1>
            <div id="signup-card" class="container col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign Up</h5>
                        <?php
                        
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Fill in all fields!</p>
                                     </div>';
                            } else if ($_GET['error'] == "invalidemailusername") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Fill in  username and e-mail!</p>
                                     </div>';
                            } else if ($_GET['error'] == "invalidemail") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Invalid e-mail!</p>
                                     </div>';
                            } else if ($_GET['error'] == "invalidusername") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Invalid username!</p>
                                     </div>';
                            } else if ($_GET['error'] == "invalidefirst_namelast_name") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Invalid first name and last name!</p>
                                     </div>';
                            } else if ($_GET['error'] == "passwordcheck") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Your password do not match!</p>
                                     </div>';
                            } else if ($_GET['error'] == "usernametaken") {
                                echo '<div class="container justify-content-center">
                                        <p class="signup-error">Username is already taken!</p>
                                     </div>';
                            }
                        }
                        
                        ?>
                        <div class="form-group">
                            <form action="../landingPage/lib/inc/signup.inc.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="first_name" id="first" placeholder="First Name"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="last_name" id="last" placeholder="Last Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <input type="text" name="username" id="username" placeholder="Username"
                                    class="form-control">
                                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control">
                                <input type="password" name="password_repeat" id="password-repeat"
                                    placeholder="Repeat Password" class="form-control">
                                <button type="submit" name="signup_submit" id="sign-up" class="btn mt-2">Sign Up</button>
                                <hr>
                                <a href="login.php" id="login" class="btn">Login</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

</body>

<?php include "./lib/inc/account-footer.php" ?>