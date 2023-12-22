<?php 
require_once '../BE/header.php';
require_once '../BE/image.php';
$array=getImgIds();
?>

<main id="main">

    <section class="breadcrumbs">
    <div class="container" data-aos="fade-up" style="padding-top:4.5vw">
        <div class="section-title">
          <h2 style="color: #cda45e;font-size: 4.5vw;">Gallery</h2>
          <p style="color:white">Photos From Our Artists</p>
        </div>
      </div>
    </section>

    <section id="gallery" class="gallery">
      <div class="container">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="hover-btn" style= "display:flex;border:3px solid #cda45e;border-radius:6px;margin-bottom:7px;max-width: 60px;align-items: baseline;">
      <i class="fa-solid fa-plus"style="display:inline-block;padding-left:3px;color: #cda45e"></i>
      <a href="add-image.php" style="display:inline-block;padding-top:6px;padding-right:6px;padding-bottom:6px,padding-left:3px;font-weight:900;color:white">ADD</a>
      </div>

      <div class="row g-0">

      <?php 
        $array=getImgIds();
      for ($i=0;$i<8;$i++ ){
        $post=getPost($array[$i]);?>
   <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="view-image.php?post_id=<?php echo $post->post_id?>"class="gallery-lightbox" data-gall="gallery-item">
      <img src="<?php echo $post->img; ?>" alt="" class="img-fluid" style="  height: 300px;width:100%" >
      </a>
    </div>
  </div>
<?php }?>

      </div>
      </div>
      </div>
    </section>

 

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>LuminaLoom</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> mohammad.ballouz@lau.edu<br>sima.sulaiman@lau.edu
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="template-index.php?#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="template-index.php?#about">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="template-index.php?#a">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="template-index.php?#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Advisory Sevices</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Collaboration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Art Gallery Exhibitions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Online Art Marketplace</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Art Events and Workshops</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Stay Inspired, Stay Informed. Subscribe to Our Newsletter for a Palette of Art Delivered to Your Inbox</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div> 
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>