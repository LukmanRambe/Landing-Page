<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="index.php#hero"><img class="footer-img" src="./assets/images/logowf.png" alt="Website Factory Logo"></a>
            </div>

            <div class="footer-menu col-lg-3">
                <h6>Menu</h6>
                <div class="footer-list">
                    <ul>
                        <li>
                            <p><a href="index.php#features">Features</a></p>
                        </li>
                        <li>
                            <p><a href="index.php#pricing">Pricing</a></p>
                        </li>
                        <li>
                            <p><a href="contact.php">Contact Us</a></p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-menu col-lg-3">
                <h6>Our Service</h6>
                <div class="footer-list">
                    <ul>
                        <li>
                            <p>Basic</p>
                        </li>
                        <li>
                            <p>Pro</p>
                        </li>
                        <li>
                            <p>Premium</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-menu col-lg-3">
                <h6>Contact Us</h6>
                <div class="footer-list">
                    <ul>
                        <li>
                            <p><i class="fa-solid fa-location-dot"></i> Jalan Mongonsidi, Medan.</p>
                        </li>
                        <li>
                            <p><i class="fa-solid fa-phone"></i><a href="https://wa.me/6265402519">+62 852 6540 2519</a></p>
                        </li>
                        <li>
                            <p><i class="fa-solid fa-envelope"></i><a href="mailto:websitefactory@gmail.com">websitefactory@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>

            <p id="footerYear" class="col-12 text-center"></p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src=" https://kit.fontawesome.com/f40798ee08.js"></script>
<script src="./assets/js/main.js"></script>


<script>
    // Footer Year
    const date = new Date()
    const currentYear = date.getFullYear()

    const footerYear = document.getElementById('footerYear')
    footerYear.innerHTML = `&copy; Website Factory, ${currentYear}.`
</script>

</body>

</html>