<?php 
require_once 'partials/header.php'; 

if (isset($_POST['contact_btn'])) {
    $name = CHECK_INPUT(SANITIZE($_POST['name']));
    $email = CHECK_INPUT(SANITIZE($_POST['email']));
    $phone = CHECK_INPUT(SANITIZE($_POST['phone']));
    $message = CHECK_INPUT(SANITIZE($_POST['message']));

    $sql = "INSERT INTO messages (fullname, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $response = VALIDATE_QUERY($sql);

    if ($response === true) {
        echo "<script>alert('Message have been sent successfully!')</script>";
    } else {
        echo "<script>alert('Failed to send message!')</script>";
    }
}

?>
        <!-- masthead end -->

        <!--page-header-->
        <div class="page-header has-image">
            <div class="page-header-content">
                <div class="featured-image"></div>
                <div class="container">
                    <h1>Contact</h1>
                    <nav class="breadcrumbs">
                        <a class="home" href="#"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Contact</span>
                    </nav>
                </div>
            </div>
        </div>
        <!--page-header  end-->

        <!-- team-->
        <div class="contactpage pagepadd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mf-contact-box clearfix ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Headquater</h2>
                            </div>
                            <div class="contact-info address"><i class="flaticon-arrow"></i>
                                <div><span>Address:</span> Plot Nō 2,  within 4 corners Enugu, along Enugu-Port Harcourt express road Ozalla, Nkanu west L.G.A Enugu State.</div>
                            </div>
                            <div class="contact-info email"><i class="fa fa-phone"></i>
                                <div><span>Call Us:</span> +(234) 903 334 1839</div>
                            </div>
                            <div class="contact-info email"><i class="flaticon-note"></i>
                                <div><span>Mail Us:</span> support@nadiceoilltd</div>
                            </div>
                            <!-- <ul class="contact-social">
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="googleplus">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="skype">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="mf-department">
                            <div class="mf-section-title text-left dark medium-size">
                                <h2>Sales Department</h2>
                            </div>
                            <div class="department-list single-slide">
                                <div class="department-group">
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi3-1-67x64.jpg" width="67" height="64" alt="testi5" title="testi5" /></div>
                                        <div class="info">
                                            <h5 class="name">Charles Mecky</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi1-1-67x64.jpg" width="67" height="64" alt="test4" title="test4" /></div>
                                        <div class="info">
                                            <h5 class="name">Lucas Don</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="department-group">
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi6-67x64.jpg" width="67" height="64" alt="testi3" title="testi3" /></div>
                                        <div class="info">
                                            <h5 class="name">Laurel Queen</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/test4-2-67x64.jpg" width="67" height="64" alt="testi1" title="testi1" /></div>
                                        <div class="info">
                                            <h5 class="name">John McManama</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mf-working-hour ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Working Hours</h2>
                            </div>
                            <ul class="mf-list-hour">
                                <li><span class="day">Monday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Tuesday</span><span class="hour">09:00am - 06:00pm</span></li>
                                <li><span class="day">Wednesday</span><span class="hour">10:00am - 08:00pm</span></li>
                                <li><span class="day">Thursday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Friday</span><span class="hour">09:00am - 06:00pm</span></li>
                                <li><span class="day">Saturday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Sunday</span><span class="hour">Closed</span></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="contactform">
            <div class="container">
                <div class="mf-section-title text-center dark large-size margbtm20">
                    <h2>Send Message Us</h2>
                </div>
                <div class="text-center margbtm40">Don’t hestiate to ask us something, Our customer support team always ready to help
                    <br>you,they will support you 24/7.</div>
                <div class="contact-form mf-contact-form-7 form-light">

                    <form method="post" action="" class="wpcf7-form">
                        <div class="messages"></div>
                        <div class="controls mf-form mf-form-2">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-12 mf-input-field">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" size="40" placeholder="Your Name*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" size="40" placeholder="Email Address*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" size="40" placeholder="Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12 mf-textarea-field">
                                    <div class="form-group">
                                        <textarea name="message" cols="40" rows="10" placeholder="Enter Your Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" name="contact_btn" class="btn-style-two">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- contact-->

        <!--google map-->
        <div class="google-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3965.0536228295637!2d7.498330914122196!3d6.38708179537844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlot%20N%C5%8D%202%2C%20within%204%20corners%20Enugu%2C%20along%20Enugu-Port%20Harcourt%20express%20road%20Ozalla%2C%20Nkanu%20west%20L.G.A%20Enugu%20State.!5e0!3m2!1sen!2sng!4v1670364839797!5m2!1sen!2sng" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--google map end-->

        <!-- footer -->
        <?php require_once 'partials/footer.php'; ?>

    <!-- jquery Liabrary -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.js"></script>
    <!-- counter js -->
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <!-- validate js -->
    <script src="js/validate.js"></script>
    <!-- switcher js -->
    <script src="js/switcher.js"></script>

    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <script src="js/gmap.js"></script>
    <script src="js/map-helper.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="js/scripts.min.js"></script>
    <script src="js/script.js"></script>
    <script src="inc/contact.js"></script>
</body>

</html>