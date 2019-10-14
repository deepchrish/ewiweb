<!--footer start-->
<footer class="main-footer mt-5">
    <div class="container">
        <div class="row justify-content-md-center text-center text-sm-left">
            <div class="col-md-2 col-sm-4 col-12 mt-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-links">
                    <h6>Products</h6>
                    <ul>
                        <li><a href="pricing-and-plans.php">Products & Pricing</a></li>
                        <li><a href="#">Make your own T-shirt</a></li>
                        <li><a href="#">Custom Gifts</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="influencers.php">Influencer merch</a></li>
                        <li><a href="track.html">Track Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-12 mt-5" data-aos="fade-up" data-aos-duration="1500">
                <div class="footer-links">
                    <h6>Services</h6>
                    <ul>
                        <li><a href="#">Print-on-demand Products</a></li>
                        <li><a href="#">Branding & White label printing</a></li>
                        <li><a href="#">Design Services</a></li>
                        <li><a href="#" disabled="disabled">Photography Services</a><span
                                    class="commingsoon">Soon</span></li>
                        <li><a href="#" disabled="disabled">Video Services</a><span class="commingsoon">Soon</span></li>
                        <li><a href="#">Store Setup Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-12 mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="footer-links">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="faqs.php">FAQs</a></li>
                        <li><a href="#" disabled="disabled">Press Release</a><span class="commingsoon">Soon</span></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#" disabled="disabled">Webinars & Tutorials</a><span
                                    class="commingsoon">Soon</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-12 mt-5" data-aos="fade-up" data-aos-duration="2500">
                <div class="footer-links">
                    <h6>Features</h6>
                    <ul>
                        <li><a href="integrations.php">Integrations</a></li>
                        <li><a href="#" disabled="disabled">API</a><span class="commingsoon">Soon</span></li>
                        <li><a class="disabled" href="#" disabled="disabled">EWI app</a><span
                                    class="commingsoon">Soon</span></li>
                        <li><a href="#" disabled="disabled">Affiliate program</a><span class="commingsoon">Soon</span>
                        </li>
                        <li><a href="#">Set-up checklist</a></li>
                        <li><a href="#">EWI features</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-12 mt-5" data-aos="fade-up" data-aos-duration="3000">
                <div class="footer-links">
                    <h6>Everything With Ink</h6>
                    <ul>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Quality</a></li>
                        <li><a href="terms-of-service.php">Terms of use</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row justify-content-sm-between p-md-5 text-center text-md-left pb-5">
            <div class="col-md-6 col-sm-12 mt-md-3 mt-4">
                <div class="footer-logo">
                    <a class="navbar-brand brand-logo" href="#"><img src="img/withink_logo.png" class="img-fluid">
                        Everything With Ink</a>
                </div>
                <div class="footer-copyright">
                    <p>We Print <i>Everything </i>Imaginable On <i>Everything</i> Possible.</p>
                    <span>Everything With Ink © 2019</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-md-3 mt-4">
                <div class="footer-social">
                    <ul>
                        <li><a href="#" title="Facebook"><span class="ti-facebook"></span></a></li>
                        <li><a href="#" title="Twitter"><span class="ti-twitter-alt"></span></a></li>
                        <li><a href="#" title="Instagram"><span class="ti-instagram"></span></a></li>
                        <li><a href="#" title="Linkedin"><span class="ti-linkedin"></span></a></li>
                        <li><a href="#" title="Pinterest"><span class="ti-pinterest-alt"></span></a></li>
                        <li><a href="#" title="Youtube"><span class="ti-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer END-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Content Animation -->
<!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
<!--Content Animation -->
<script src="js/custom.js"></script>
<!--Animation-->
<!--<script>-->
<!--    AOS.init();-->
<!--</script>-->
<!--Animation-->

<!--Hamburger-->
<script>
    $(document).ready(function () {
        $('#nav-icon3').click(function () {
            $(this).toggleClass('open');
        });
    });
</script>
<!--Hamburger-->

<!--Sticky Navbar START-->
<script>
    $(document).ready(function () {
        $(window).bind('scroll', function () {
            var navHeight = $(window).height() - 400;
            if ($(window).scrollTop() > navHeight) {
                $('.header-bg').addClass('stickynav');
            }
            else {
                $('.header-bg').removeClass('stickynav');
            }
        });
    });
</script>
<!--Sticky Navbar END-->

<!-- Product cat submenu -->
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            $(".drop-menu-test").addClass("product-drop-menu");
        } else if (scroll <= 300) {
            $(".drop-menu-test").removeClass("product-drop-menu");
        }
    });
</script>
<!-- Product cat submenu -->

<!-- integrations store -->
<!--<script>-->
<!--    window.onscroll = function() {myFunction()};-->
<!---->
<!--    var navbar = document.getElementById("intenav");-->
<!--    var sticky = navbar.offsetTop;-->
<!---->
<!--    function myFunction() {-->
<!--        if (window.pageYOffset >= sticky) {-->
<!--            navbar.classList.add("inte-fixed")-->
<!--        } else {-->
<!--            navbar.classList.remove("inte-fixed");-->
<!--        }-->
<!--    }-->
<!--</script>-->
<!-- integrations Store -->

<!--Index page auto latest orders update START-->
<script>
    var roles = ['Florida, USA', 'Georgia, USA', 'Indiana, USA'];
    var roleId = 0;

    window.setInterval(function () {
        $('#role').html(roles[roleId]);
        roleId = roleId + 1;
        if (roleId >= roles.length) {
            roleId = 0;
        }
    }, 2000);

    var roles2 = ['5 Minutes ago', '1 Second ago', '1 Hour ago'];
    var role2Id = 0;

    window.setInterval(function () {
        $('#role2').html(roles2[role2Id]);
        role2Id = role2Id + 1;
        if (role2Id >= roles2.length) {
            role2Id = 0;
        }
    }, 2000);


    var roles3 = ['Alberta, Canada', 'Manitoba, Canada', 'Nunavut, Canada'];
    var role3Id = 0;

    window.setInterval(function () {
        $('#role3').html(roles3[role3Id]);
        role3Id = role3Id + 1;
        if (role3Id >= roles3.length) {
            role3Id = 0;
        }
    }, 3500);

    var roles4 = ['1 Hour ago', '5 Minutes ago', '1 Second ago'];
    var role4Id = 0;

    window.setInterval(function () {
        $('#role4').html(roles4[role4Id]);
        role4Id = role4Id + 1;
        if (role4Id >= roles4.length) {
            role4Id = 0;
        }
    }, 3500);
</script>
<!--Index page auto latest orders update END-->

<!--Faq page plus mins START-->
<script>
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('ti-plus ti-minus');
    }

    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
<!--Faq page plus mins END-->

<script>
    // function scrollNav() {
    //     $('.modren-nav a').click(function(e){
    //         e.preventDefault();
    //         //Toggle Class
    //         $(".active").removeClass("active");
    //         $(this).closest('li').addClass("active");
    //         var theClass = $(this).attr("class");
    //         $('.'+theClass).parent('li').addClass('active');
    //         //Animate
    //     });
    //     //$('.scrollTop a').scrollTop();
    // }
    // scrollNav();
</script>

<!--Pricing and plan START-->
<script>

    window.show = function (elementId) {
        document.getElementById("montlyprice").style.display = "none";
        document.getElementById("annualprice").style.display = "none";
        document.getElementById("montlyprice1").style.display = "none";
        document.getElementById("annualprice1").style.display = "none";
        document.getElementById(elementId).style.display = "block";
    }
</script>

<script>
    $(document).ready(function () {
        $('.btn-group button').click(function () {
            $('button').removeClass("price-green-btn");
            $(this).addClass("price-green-btn");
        });
    });
</script>
<!--Pricing and plan END-->

</body>
</html>