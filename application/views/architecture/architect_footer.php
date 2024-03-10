 </div>
              </div>
            </div>
          </div>
        </li>
      </div>

    </div>
  </div>

</div>


  <script src="<?php echo base_url('architect_assets/') ?>assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
      <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
  <!-- //script -->
  <!-- /main-slider -->
</section>
 <!--  services section -->

<script src="<?php echo base_url('architect_assets/') ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('architect_assets/') ?>assets/js/lightbox-plus-jquery.min.js"></script>
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">


      <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
          <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->

        <!--.carousel-inner-->
      </div>




    </div>
  </div>



 
 <!-- grids block 5 -->
 <section class="w3l-footer-29-main" id="footer">
  <div class="footer-29">
    <div class="grids-forms-1 pb-5">
<div class="container">
  <div class="grids-forms">
      <div class="main-midd">
          <h4 class="title-head">Newsletter – Get Updates & Latest News</h4>
          
      </div>
      <div class="main-midd-2">
          <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Enter your email">
              <button class="btn" type="submit">Subscribe</button>
          </form>
      </div>
    </div>
  </div>
  </div>
      <div class="container pt-5">
        
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">About Us</h6>
                  <ul>
                     <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                  </ul>
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Social Links</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Useful Links</h6>
                      <li><a href="services.html">Plans and Projects</a></li>
                      <li><a href="services.html">Architecture</a></li>
                      <li><a href="services.html"> Apartment Buildings</a></li>
                      <li><a href="services.html">Skyscrapers Buildings</a></li>
                      <li><a href="services.html"> Restauration Projects</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29">Recent Projects</h6>
                      <a href="#"><img src="<?php echo base_url('architect_assets/') ?>assets/images/g2.jpg" class="img-responsive" alt=""><p>We Are Leading International Consultiing Agency</p></a>
                      <a href="#"><img src="<?php echo base_url('architect_assets/') ?>assets/images/g8.jpg" class="img-responsive" alt=""><p>Digital Marketing Agency all the foundational tools</p></a>
                      <a href="#"><img src="<?php echo base_url('architect_assets/') ?>assets/images/g6.jpg" class="img-responsive" alt=""><p>Doloremque velit sapien labore eius itna</p></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="#"> Blog</a></li>
                      <li><a href="contact.html">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29">© 2020 Interior Architect. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
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
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="<?php echo base_url('architect_assets/') ?>assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

<!-- Smooth scrolling -->

<script src="<?php echo base_url('architect_assets/') ?>assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->

