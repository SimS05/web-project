<?php
require_once '../BE/image.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LuminaLoom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/bb527c3eda.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Sep 20 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 2:30PM</span></i>
      </div>

     
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">LuminaLoom</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Artistry Emporium</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Artists</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
            <!-- <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Schedule Session</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url('../assets/img/a.jpg') top center;">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>LuminaLoom</span></h1>
          <h2>Illuminating Perspectives, Weaving Dreams.</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Marketplace</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Schedule A Session</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background: url('../assets/img/istock.jpg') center center;">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../assets/img/JohanZoffany.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Welcome to LuminaLoom Gallery, where creativity takes center stage, and every brushstroke tells a story.</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <ul>
              <li><i class="bi bi-check-circle"></i> Our curated collection spans a spectrum of mediums and styles, from ethereal oil paintings to avant-garde digital masterpieces. </li>
              <li><i class="bi bi-check-circle"></i> Step into a realm where art transcends its frame. Our gallery is more than a mere collection of images; it's an immersive experience that engulfs you in the palpable passion and craftsmanship of each creation.</li>
              <li><i class="bi bi-check-circle"></i> At LuminaLoom, we celebrate the avant-garde, the unconventional, and the revolutionary. Encounter thought-provoking concepts that challenge norms and redefine artistic boundaries. </li>
            </ul>
            <p>
              Our virtual sanctuary pulsates with the vibrant energy of artistic expression, inviting you to explore a kaleidoscope of perspectives. Immerse yourself in the boundless world of art with us
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Discover LuminaLoom</h2>
          <p>Where Creativity Knows No Boundaries</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <!-- <span>01</span> -->
              <h4>Gallery</h4>
              <p>Step into our Gallery Wonderland, where we showcase a carefully curated collection of breathtaking artworks from emerging and established artists. Whether you seek inspiration or emotional expression, our gallery is a visual feast, celebrating the diversity and beauty of contemporary art.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <!-- <span>02</span> -->
              <h4>Marketplace</h4>
              <p>Immerse yourself in our Artisan Marketplace, where you can discover and acquire a diverse range of art supplies, merchandise featuring exquisite artworks, and curated books that offer profound insights into the world of art. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <!-- <span>03</span> -->
              <h4> Artful Events Hub</h4>
              <p>Join us in our Artful Events Hub, where creativity comes to life. From virtual exhibitions and live artist talks to hands-on workshops, our art events provide a dynamic platform for artists and art lovers alike.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artistry Emporium</h2>
          <p>Elevate Your Craft, Enrich Your Artistry</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Books and Catalogs</li>
              <li data-filter=".filter-salads">Merchandise</li>
              <li data-filter=".filter-specialty">Supplies</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="../assets/img/book.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ephemeral Elegance: A Retrospective </a><span>$15.95</span>
            </div>
            <div class="menu-ingredients">
               Victoria Montclair
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="../assets/img/sup.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Set: "Nature's Palette" Acrylic Painting Set</a><span>$26.95</span>
            </div>
            <div class="menu-ingredients">
              Dive into the world of acrylic painting with this Nature's Palette set, inspired by the artistic vision of Olivia Meadows
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="../assets/img/book.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Metamorphosis in Monochrome </a><span>$37.95</span>
            </div>
            <div class="menu-ingredients">
              Benjamin Sterling
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="../assets/img/merch.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Design: "Celestial Harmony"</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              An exquisite T-shirt featuring a vibrant artwork by Isabella Cruz
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="../assets/img/sup.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Set: "Essence of Color" Watercolor Kit</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Immerse yourself in the essence of color with this curated watercolor kit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="../assets/img/book.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Serenity in Seasons </a><span>$24.95</span>
            </div>
            <div class="menu-ingredients">
              Olivia Meadows
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="../assets/img/merch.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Design: "Floral Whimsy" Hoodie</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Embrace the whimsical beauty of nature with this cozy hoodie adorned with Ava Harper's enchanting floral artwork
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="../assets/img/merch.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Design: "Urban Serenity" Tote Bag</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
Carry a touch of urban serenity with this exclusive tote bag featuring a captivating cityscape artwork by Malik Thompson            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="../assets/img/sup.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Set: "Modern Sketching Essentials"</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
Unleash your inner sketch artist with this curated set of modern sketching essentials            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Featured Masterpieces</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Ephemeral Whispers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Metamorphic Echoes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Serenity's Embrace</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Visions Unveiled</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Celestial Harmony</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Isabella Cruz</h3>
                    <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                    <p class="fst-italic">A mesmerizing blend of vibrant hues and delicate strokes, "Ephemeral Whispers" transports viewers into a world where time stands still. Isabella Cruz captures fleeting moments with grace, inviting you to explore the profound beauty found in the transient dance of color and form</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/Nikolas.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Malik Thompson</h3>
                    <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                    <p class="fst-italic">Immerse yourself in the transformative journey depicted in "Metamorphic Echoes" by Malik Thompson. Through the interplay of light and shadow, Thompson's piece reflects the ever-changing nature of existence, inviting contemplation on the cycles of life and growth</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/ok.webp" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ava Harper</h3>
                    <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                    <p class="fst-italic"> "Serenity's Embrace" by Ava Harper is a celebration of nature's serenity. With meticulous detail, Harper captures the essence of a tranquil moment, where the gentle dance of flora invites viewers to find solace and connection with the natural world</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/lay.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Billy Butcher</h3>
                    <p class="fst-italic">Billy Butcher unveils the enigmatic depths of the human psyche in "Visions Unveiled." With dynamic brushwork and thought-provoking symbolism, this masterpiece invites introspection, challenging perceptions and sparking a dialogue between the artwork and the observer</p>
                    <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/unv.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Victoria Montclair</h3>
                    <p class="fst-italic">In "Celestial Harmony," Victoria Montclair orchestrates a celestial ballet of colors and shapes. The artwork invites viewers to transcend earthly confines and embark on a cosmic journey where harmony reigns, and the universe becomes a canvas for artistic expression</p>
                    <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/lll.avif" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events" style="background: url('../assets/img/ex.jpg') center center no-repeat;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Upcoming Events</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../assets/img/Kusama.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Chromatic Reverie: A Multisensory Art Experience</h3>
                  <div class="price">
                    <p><span>Date: April 15, 2024<br>
Location: LuminaLoom Gallery, 157 William St, New York, NY 10038, United States</span></p>
                  </div>
                  <p class="fst-italic">
                    Immerse yourself in a kaleidoscope of colors and sensations at "Chromatic Reverie." This multisensory art exhibition challenges traditional boundaries, inviting visitors to explore the intersection of sight, sound, and touch. Featuring works from contemporary artists, this event promises a vibrant and interactive journey through the limitless possibilities of artistic expression.
                  </p>
                  <!-- <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../assets/img/bas.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Sculptural Symphonies: A Fusion of Form and Sound</h3>
                  <div class="price">
                    <p><span>Date: May 20, 2024<br>
Location: Harmony Hall, 456 Sculpture Street, Artropolis</span></p>
                  </div>
                  <p class="fst-italic">
                    Experience the synergy between sculpture and sound at "Sculptural Symphonies." This unique event brings together sculptors and musicians to create an immersive experience where each sculpture is a visual note in a larger symphony. Join us for an evening of artistic collaboration, where form and sound harmonize to create a multisensory masterpiece.
                  </p>
                  <!-- <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="../assets/img/dig.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Digital Dreamscape: Exploring Virtual Realms in Art</h3>
                  <div class="price">
                    <p><span>Date: June 10, 2023<br>
Location: Virtual Event (Online)</span></p>
                  </div>
                  <p class="fst-italic">
                    Enter the ethereal realm of "Digital Dreamscape," an online exhibition pushing the boundaries of digital art. Featuring virtual reality installations, interactive web-based artworks, and augmented reality experiences, this event explores the intersection of technology and creativity. Join us from the comfort of your digital device and witness a new era of artistic innovation.
                  </p>
                  <!-- <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Collaboration</h2>
          <p>Schedule a Session with a Professional Artist</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Schedule Session</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
In the ethereal realm of LuminaLoom, my art finds both a canvas and a cosmic conversation. This gallery is a celestial junction where artists transcend the earthly constraints, and the boundaries between the tangible and the sublime blur. It's an exhilarating experience to be part of a space that not only showcases art but orchestrates a symphony of creative energies. LuminaLoom is a testament to the infinite possibilities when art and the cosmos converge in a celestial dance.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../assets/img/riiiii.jpeg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Being part of LuminaLoom is a collaborative journey into the realms of emotion and introspection. The gallery's avant-garde spirit aligns seamlessly with my exploration of the human psyche. LuminaLoom is more than a showcase; it's a provocateur of thought, a space where my art engages in a dynamic dialogue with the viewer. It's an honor to contribute to a gallery that embraces the transformative potential of contemporary art.                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../assets/img/rii.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Exhibiting at LuminaLoom Arts is a symbiotic dance between my nature-inspired creations and the gallery's commitment to celebrating the beauty of the world. LuminaLoom is not just a space; it's a sanctuary where the language of art and nature converges. It's an exhilarating journey to see my works find resonance within the gallery's ethos, connecting with art enthusiasts who share a passion for the awe-inspiring wonders of our environment.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../assets/img/ar.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Abstract Artist</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
LuminaLoom is more than a venue; it's a curator of cultural conversations. Having my art featured here is an opportunity to contribute to a narrative that transcends individual expression. The gallery's commitment to promoting inclusivity and dialogue elevates the impact of each piece, creating a dynamic dialogue between the artist, the work, and the diverse audience it attracts.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../assets/img/bl.webp" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Being part of LuminaLoom Gallery is a profound honor. This space not only showcases my work but provides a haven for the convergence of diverse artistic voices. LuminaLoom's commitment to fostering creativity and dialogue within its walls is a testament to the transformative power of art. It's not just a gallery; it's a vibrant tapestry where each artist weaves their narrative into the rich fabric of the collective imagination.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Architect</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Latest Chapters of Artistry</p>
          <div style="color:#cda45e; position: absolute; right:0; margin-right: 30px; font-family: 'Poppins', sans-serif; cursor: pointer;"><a href="gallery.php">View More→</a> </div>
        </div>
      </div>
      

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

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
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artists</h2>
          <p> Some of Our Proffesional Artists</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="../assets/img/aa.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Savannah Doe</h4>
                  <span>Painter</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="../assets/img/is.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Digital Artist</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="../assets/img/kim.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kim Jung Li</h4>
                  <span>Abstract Artist</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 02:30 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>mohammad.ballouz@lau.edu<br>sima.sulaiman@lau.edu</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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