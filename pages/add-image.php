<?php 
include_once '../BE/header.php';
?>

<main id="main">
    <section class="breadcrumbs">
        <div class="container" data-aos="fade-up" style="padding-top:4.5vw">
            <div class="section-title">
                <h2 style="color: #cda45e;font-size: 4.5vw;">Gallery</h2>
                <p style="color:white;margin-left:12.5vw">Add Image</p>
            </div>

            <div style="border:2px solid white;padding:6px">
                <form action="../BE/image-contr.php" name="add-Img" method="POST" enctype="multipart/form-data">
                    <div class="form-content" style="display:flex;flex-wrap:wrap">

                        <div class="image-input" style="width:45%;margin-right:50px">
                            <label for="imgupload" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:2.5vw">Image:<span style="color:red">*</span></label>
                            <div id="display-img" style="width:100%;height:411px;border:1px solid black;background-position:center;background-size:cover;margin-bottom:10px;"></div>
                            <input type="file" name="imgupload" id="imageupload" accept="image/png, image/jpg" required>
                        </div>

                        <div class="text-input" style="width:45%;">
                        <label for="text-input" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:2.5vw;">Description:<span style="color:red">*</span></label>
                            <div class="img-creator" style="display:flex;margin-bottom:15px;">
                                <label for="creator" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:15px;margin-right:10px;">Creator:<span style="color:red">*</span></label>
                                <input type="text" value="<?php echo $_SESSION["username"]?>" style="background-color:#817b7b;" name="creator" id="creator">
                            </div>
                            <div class="img-pdate" style="display:flex;margin-bottom:15px;">
                                <label for="pdate" style="padding-bottom:4px; font-family:'Poppins', sans-serif;font-size:15px;margin-right:10px;">Publish Date:<span style="color:red">*</span></label>
                                <input type="date" value="<?php echo date('Y-m-d'); ?>" style="background-color:#817b7b;" name="pdate" id="pdate">
                            </div>
                            <div class="img-desc">
                                <textarea name="desc" id="desc" rows="10" cols="50" style="background-color:#817b7b;width:100%; color: #cda45e;" placeholder="Write a bit about your piece!" required></textarea>
                            </div>
                            
                            <input type="submit" name="addImg" value="ADD" style="border:3px solid #cda45e; border-radius:6px; width:75px; text-align:center; display:block;margin-top:5px;margin-left:420px;color: #cda45e;">
                                
                                
                            
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </section>
</main>
<script>
  const image_upload = document.querySelector("#imageupload");
  var uploaded_img = "";
  const reader = new FileReader();

  image_upload.addEventListener("change", function () {
    reader.addEventListener("load", () => {
      uploaded_img = reader.result;
      console.log(uploaded_img); 
      document.querySelector("#display-img").style.backgroundImage = `url(${uploaded_img})`; 
    });
    reader.readAsDataURL(this.files[0]);
  });
</script>

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