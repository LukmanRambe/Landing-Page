<?php include "./lib/inc/header.php" ?>

<section href="hero" id="hero">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>contact us</h1>
                    <p>Website factory is a company engaged in digital marketing, with staff who have years of
                        experience in their fields
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image-box">
                    <img src="./assets/images/contact-vector.png" class="img-fluid" alt="contact us">
                </div>
            </div>

        </div>

    </div>

</section>

<section id="contact">

    <div class="section-title text-center">
        <h2>Contact Us</h2>
    </div>

    <div class="container">
        <div class="row">

            <div class="container col-lg-6">
                <div class="text text-lg-left contact-info">
                    <h3>Website Factory</h3>
                    <p>If there are things you do not understand or you want to consult regarding digital marketing,
                        please
                        contact us. We will be happy to respond immediately</p>

                    <div class="list">
                        <ul class="fa-ul">
                            <li>
                                <span class="fa-li"><i class="fa-solid fa-location-dot"></i></span>Jalan Mongonsidi, Medan.
                            </li>
                            <li>
                                <span class="fa-li"><i class="fa-solid fa-phone"></i></span>+62 852 6540 2519
                            </li>
                            <li>
                                <span class="fa-li"><i class="fa-solid fa-envelope"></i></span>websitefactory@gmail.com
                            </li>
                        </ul>
                    </div>

                </div>

            </div>


            <div class="container col-lg-6">
                <div class="container">
                    <div class="card shadow">
                        <div class="card-body">
                            <h6 class="card-title text-center">Contact Us</h6>
                            <h4 class="sent-notification"></h4>
                            <div class="form-group">
                                <form id="contact-form" class="contact-form" action="contact.php" method="POST">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name"><br>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail"><br>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"><br>
                                    <textarea placeholder="Your Message" name="message" class="form-control"></textarea><br>
                                    <button type="submit" name="contact_submit" id="login" class="btn">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

</html>

<?php include "./lib/inc/footer.php" ?>