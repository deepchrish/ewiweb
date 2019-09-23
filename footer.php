<!--footer start-->
<footer class="main-footer mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 mt-5">
                <div class="footer-links">
                    <h6>Products</h6>
                    <ul>
                        <li><a href="#">Products & Pricing</a></li>
                        <li><a href="#">Make your own T-shirt</a></li>
                        <li><a href="#">Custom Gifts</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Influencer merch</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="footer-links">
                    <h6>Services</h6>
                    <ul>
                        <li><a href="#">Print-on-demand Products</a></li>
                        <li><a href="#">Branding & White label printing</a></li>
                        <li><a href="#">Design Services</a></li>
                        <li><a href="#">Photography Services</a></li>
                        <li><a href="#">Video Services</a></li>
                        <li><a href="#">Store Setup Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="footer-links">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Press Release</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Webinars & Tutorials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="footer-links">
                    <h6>Features</h6>
                    <ul>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">EWI app</a></li>
                        <li><a href="#">Affiliate program</a></li>
                        <li><a href="#">Set-up checklist</a></li>
                        <li><a href="#">EWI features</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="footer-links">
                    <h6>Everything With Ink</h6>
                    <ul>
                        <li><a href="contact-us.php">Contacts</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Quality</a></li>
                        <li><a href="#">Terms of use</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row justify-content-sm-between p-5">
            <div class="col-md-6 mt-3">
                <div>
                    <a class="navbar-brand brand-logo" href="#"><img src="/img/withink_logo.png" class="img-fluid">
                        Everything With Ink</a>
                </div>
                <div class="footer-copyright">
                    <p>We Print <i>Everything </i>Imaginable On <i>Everything</i> Possible.</p>
                    <span>Everything With Ink © 2019</span>
                </div>
            </div>
            <div class="col-md-6 mt-3">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

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
</body>
</html>