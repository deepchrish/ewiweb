<?php
$title = "Contact Us";
$pageDescription = "Contact Us page description";
include('header.php');
?>
    <!--We’re eager to help you with your questions START-->
    <section class="eager-help">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="header-heading">
                        <h1>We’re eager to help you with your questions.</h1>
                    </div>
                    <div class="cus-eger-text">
                        <p>Get in touch with our customer support using whatever channel suits you best.</p>
                        <a href="#">Fill in contact form <span class="ti-arrow-right"></span></a>
                        <a href="#">Browse FAQs <span class="ti-arrow-right"></span></a>
                        <a href="#">How-to-Videos <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cus-right-bg">
                        <img class="img-fluid" src="img/header-right-bnr.png" alt="contact us">
                    </div>
                    <div class="cus-right-img">
                        <img class="img-fluid" src="img/contact-us.png" alt="contact us">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We’re eager to help you with your questions END-->

    <!--contact Options Chat, email START-->
    <section class="cont-options">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="ap-light-box contact-box v-center">
                        <div class="cont-mode">
                            <h5>Chat</h5>
                            <p>You can chat with us from the bottom-right corner of any Everything With Ink’s page.</p>
                            <button class="btn primary-btn-custom">Chat with us</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-2" data-aos="fade-up" data-aos-duration="2000">
                    <div class="amour-bg contact-box v-center" style="background: #fdf5f8;">
                        <div class="cont-mode">
                            <h5>Email</h5>
                            <p>No matter how big or small your question is, we'll make sure to get back to you.</p>
                            <a href="mailto:support@everythingwithink.com">support@everythingwithink.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact Options Chat, email END-->

    <!--Contact form START-->
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="contact-bg-art">
                        <img class="img-fluid" src="img/contact-us-bg.png" alt="bg">
                    </div>
                    <div class="alabaster-bg pb-5 pt-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="form-start text-center">
                            <h2>Contact form</h2>
                            <p class="pt-2">Send us a message from right here using the form below!</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8 col-sm-10 col-10">
                                <form>
                                    <div class="form-group">
                                        <label for="yourname">Your Name</label>
                                        <input type="text" class="form-control" id="yourname" placeholder="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="emailaddress">Email Address</label>
                                            <input type="email" class="form-control" id="emailaddress"
                                                   placeholder="johndoe@example.com">
                                        </div>
                                        <label for="topic">Topic</label>
                                        <input type="text" class="form-control" id="topic" placeholder="example topic">
                                    </div>
                                    <div class="form-group">
                                        <label for="yourmessage">Message</label>
                                        <textarea class="form-control" id="yourmessage" rows="5"
                                                  placeholder="Write your Message Here"></textarea>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agreewithit">
                                        <label class="custom-control-label" for="agreewithit">I agree to my data being
                                            processed in accordance with Everything With Ink’s Privacy Policy.</label>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn primary-btn-custom">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact form END-->
<?php
include('footer.php');
?>