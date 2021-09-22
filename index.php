<?php include "./lib/inc/header.php" ?>

<main>

    <!-- Hero Section -->
    <section href="hero" id="hero">

        <!-- Login Status -->

        <div id="login-alert" class="container col-lg-6 col-md-12 login-alert">
            <div class="container card">
                <?php 
                
                if (isset($_GET['login']) == "success") {
                    echo '<p class="login-status-text text-center justify-content-center">You are logged in!</p>';
                } else if (isset($_GET['logout']) == "success") {
                    echo ' <p class="login-status-text text-center justify-content-center">You are logged out!</p>';
                }

                ?>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-9">
                    <div class="text">
                        <h1>the best web creation service</h1>
                        <p>We Provide Professional Web Company Profile, Online Shop, Landing Page, Travel Web and Dealer
                            Web.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-box">
                        <img src="./assets/images/index-vector.png" class="img-fluid" alt="factory">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Features Section -->
    <section href="#features" id="features">

        <div class="container justify-content-center mt-5">
            <div class="feature-title">
                <h2>Features</h2>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center text-center mt-5">

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-globe"></i>
                    <h4>Fast Website Access</h4>
                    <p>website speed affects SEO and affects user experience.</p>
                </div>

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-tools"></i>
                    <h4>Easy To Maintain</h4>
                    <p>The website that we design is very easy to manage or is user friendly on a smartphone or
                        computer device.</p>
                </div>

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-credit-card"></i>
                    <h4>Ready E-commerce</h4>
                    <p>In addition to our company profile, we can also design online store websites or what is
                        commonly
                        called e-commerce.</p>
                </div>

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-headphones"></i>
                    <h4>IT Solutions</h4>
                    <p>We can also work with teams to build more complex software.</p>
                </div>

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-bolt"></i>
                    <h4>Fast Processing</h4>
                    <p>we guarantee project work according to deadlines balanced with good analysis.</p>
                </div>

                <div class="col-md-4 col-sm-12 feature-block">
                    <i class="fas fa-chart-line"></i>
                    <h4>Digital Marketing</h4>
                    <p>we are the best digital marketing service that can help market your products and services
                        online.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section href="#pricing" id="pricing">

        <div class="container justify-content-center mb-5">
            <div class="pricing-title">
                <h2>Pricing</h2>
            </div>
        </div>

        <div class="container justify-content-center text-center">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-globe"></i>
                            <h4 class="card-title mb-3">Basic</h4>
                            <div class="list">
                                <p>Rp 3.000.000</p>
                                <p>Gratis Domain .com</p>
                                <p>Web Space 500 MB</p>
                                <p>Unlimited Bandwith</p>
                                <p>4 Page</p>
                                <p>Revisi Desain &amp; Konten 1 Kali</p>
                                <p>Mobile Responsif</p>
                                <p>Contact Form</p>
                                <p>SEO Friendly</p>
                                <p>Optimasi Loading SpeedWebsite</p>
                                <p>Perpanjangan Tahun Berikutnya Rp. 1.000.000</p>
                                <p>Support by email &amp; call/WA</p>
                                <p>Free Konsultasi</p>
                            </div>
                            <a href="https://wa.me/6265402519" class="btn">Contact Us</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card premium">
                        <div class="card-header">Popular</div>
                        <div class="card-body">
                            <i class="fas fa-gem"></i>
                            <h4 class="card-title mb-3">Premium</h4>
                            <div class="list">
                                <p>Rp 6.000.000</p>
                                <p>Gratis Domain .com</p>
                                <p>Unlimited Web Space</p>
                                <p>Unlimited Bandwith</p>
                                <p>10 Page</p>
                                <p>Revisi Desain &amp; Konten 2 Kali</p>
                                <p>Mobile Responsif</p>
                                <p>Contact Form</p>
                                <p>SEO Friendly</p>
                                <p>Optimasi SEO Off &amp; On Page</p>
                                <p>Optimasi Loading Speed Website</p>
                                <p>Perpanjangan Tahun Berikutnya Rp. 1.750.000</p>
                                <p>Sosial Media Icon</p>
                                <p>Support by email &amp; call/WA</p>
                                <p>Free Konsultasi</p>
                            </div>
                            <a href="https://wa.me/6265402519" class="btn">Contact Us</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-trophy"></i>
                            <h4 class="card-title mb-3">Pro</h4>
                            <div class="list">
                                <p>Rp 4.000.000</p>
                                <p>Gratis Domain .com</p>
                                <p>Unlimited Web Space</p>
                                <p>Unlimited Bandwith</p>
                                <p>6 Page</p>
                                <p>Revisi Desain &amp; Konten1Kali</p>
                                <p>Mobile Responsif</p>
                                <p>Contact Form</p>
                                <p>SEO Friendly</p>
                                <p>Optimasi Loading Speed Website</p>
                                <p>Perpanjangan Tahun Berikutnya Rp. 1.500.000</p>
                                <p>Support by email &amp; call/WA</p>
                                <p>Free Konsultasi</p>
                            </div>
                            <a href="https://wa.me/6265402519" class="btn">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

</main>

<?php include "./lib/inc/footer.php" ?>