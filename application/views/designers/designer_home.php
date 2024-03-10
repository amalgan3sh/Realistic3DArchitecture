

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="<?php echo base_url('other_assets/') ?>assets/videos/video.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <!-- if logo is image enable this   
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                        <h4>We Execute Our Ideas From Start to Finish </h4>
                        <p class="mt-3">Irferendis repudandae fugia rchitecto beatae rederit svitae recusa ndae
                            debitifacere uiimi placeat maxienui </p>
                        <a href="about.html" class="btn btn-style mt-md-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

   

    <!-- footer -->
    <footer class="w3l-footer-22 py-5">
        <div class="container py-md-5 py-4">
            <div class="row sub-columns">
                <div class="col-lg-4 col-sm-6 sub-one-left">
                    <h6>About </h6>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                    <div class="columns-2">
                        <ul class="social">
                            <li><a href="#facebook" title="facebook"><span class="fab fa-facebook-f"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin" title="linkedin"><span class="fab fa-linkedin-in"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter" title="twitter"><span class="fab fa-twitter"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google" title="google"><span class="fab fa-google-plus-g"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#instagram" title="instagram"><span class="fab fa-instagram"
                                        aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">
                    <h6>Our Services</h6>
                    <ul>
                        <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Website Designing</a>
                        </li>
                        <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Web Hosting</a>
                        </li>
                        <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Digital Photography</a>
                        </li>
                        <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Photoshop to HTML</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="index.html"><span class="fas fa-angle-right mr-2"></span>Home</a></li>
                        <li><a href="about.html"><span class="fas fa-angle-right mr-2"></span>About</a>
                        </li>
                        <li><a href="#blog"><span class="fas fa-angle-right mr-2"></span>Blog Posts</a>
                        </li>
                        <li><a href="contact.html"><span class="fas fa-angle-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                    <h6>Help & Support</h6>
                    <ul>
                        <li><a href="#live"><span class="fas fa-angle-right mr-2"></span>Live
                                Chart</a></li>
                        <li><a href="#faq"><span class="fas fa-angle-right mr-2"></span>Faq</a>
                        </li>
                        <li><a href="#support"><span class="fas fa-angle-right mr-2"></span>Support</a>
                        </li>
                        <li><a href="#terms"><span class="fas fa-angle-right mr-2"></span>Terms
                                of Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="sub-contact mt-5 pt-lg-4">
                <div class="row">
                    <div class="col-md-4 footer-contact d-flex align-items-center">
                        <span class="fas fa-envelope-open" aria-hidden="true"></span>
                        <div>
                            <a href="mailto:info@example.com">info@example.com</a>
                            <p>Drop Us a Line</p>
                        </div>
                    </div>
                    <div class="col-md-4 footer-contact d-flex align-items-center active">
                        <span class="fas fa-phone-alt" aria-hidden="true"></span>
                        <div>
                            <a href="tel:+44-000-888-999">+44-000-888-999</a>
                            <p>Call Us Now</p>
                        </div>
                    </div>
                    <div class="col-md-4 footer-contact d-flex align-items-center">
                        <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                        <div>
                            <h5> London, 235 Terry, 10001</h5>
                            <p>Get Direction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2021 Execution. All rights reserved. Design by
                        <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="<?php echo base_url('other_assets/') ?>assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- owl carousel -->
    <script src="<?php echo base_url('other_assets/') ?>assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- owl carousel -->

    <!-- magnific popup -->
    <script src="<?php echo base_url('other_assets/') ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="<?php echo base_url('other_assets/') ?>assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="<?php echo base_url('other_assets/') ?>assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>
