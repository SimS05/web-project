<?php 
require_once '../BE/header.php';
require_once '../BE/image.php';
if (isset($_GET['post_id'])) {
  $post_id= $_GET['post_id'];
  $post=getPost($post_id);
}
?>


<main id="main">
    <section class="breadcrumbs">
    <div class="container" data-aos="fade-up" style="padding-top:4.5vw">
        <div class="section-title">
          <h2 style="color: #cda45e;font-size: 4.5vw;">Gallery</h2>
          <p style="color:white;margin-left:85px">A Closer Look</p>
        </div>
      </div>
    </section>

    <section class="closer-look">

    <section class="closer-look">
    <div style="border:4px solid #cda45e;display:flex;height:511px;">
      <div id="display-img" style="width:45%;display:inline-block;height:100%;overflow:hidden;">
        <img src="<?php echo $post->img;?>" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
      </div>

      <div id="details" style="margin-left:8px;">
    <div class="img-creator" style="display:flex;margin-bottom:15px;height:10%;align-items: baseline;margin-top:5px">
        <label for="creator" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:20px;margin-right:10px;">Creator:</label>
        <text style="background-color:#817b7b;color:black;border-radius:5px;padding:3px"><?php echo $post->uemail?></text>
        </div>
        <div class="img-pdate" style="display:flex;margin-bottom:15px;height:10%;align-items: baseline;">
        <label for="pdate" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:20px;margin-right:10px;">Publish Date:</label>
        <text style="background-color:#817b7b;color:black;border-radius:5px;padding:3px"><?php echo $post->pdate; ?></text>
        </div>
        <i class="fa-regular fa-thumbs-up fa-xl" style="color:green"><text style="font-weight:900;font-size:20px;margin-left:4px;margin-right:20px">168</text></i>
        <i class="fa-regular fa-thumbs-down fa-xl" style="color:red"><text style="font-weight:900;font-size:20px;margin-left:4px;margin-right:20px">25</text></i>
        <div class="comments" style="display:flex;margin-bottom:15px;height:10%;margin-top:15px">
        <label for="comments" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:20px;margin-right:10px;">Comments:</label>
        <!-- comment system goes here -->
        </div>

    </div>


    </section>


      <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
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
