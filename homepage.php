<!DOCTYPE html>
<?php
include 'conn.php';

 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Beebagi.id</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="material-compact-login-animation/logins.html">

  </head>

  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area-2">
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#app-features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#screenshots">Screen shots</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">Testimoni</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Plans</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="material-compact-login-animation/index.html">Login</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#map-area">Survey</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <?php

              if(isset($_SESSION['username']))
              {
                  echo "<h2 class='head-title'> Selamat Datang ".$_SESSION['username']."</h2>";
              }else {
                  // header("Location: homepage.php");
                  echo "<h2 class='head-title'>Beebagi.id</h2>";

              }

               ?>

              <p>Beebagi.id merupakan suatu aplikasi yang dapat membantu ada menyelesaikan masalah sisa makananyang berlebih. Kami akan menyalurkan makanan beelebih yang anda miliki kepada yang membutuhkan. Namun,apabila anda tidak memiliki makanan beelebih dan ingin membantu kami untuk mendistribusikannya sebagai FoodHero.</p>
              <div class="header-button">
                <?php

                if(isset($_SESSION['username']))
                {
                    echo "<a href='logout.php' class='btn btn-border-filled'>Logout</a>";
                }else {
                    // header("Location: homepage.php");
                    echo "<a href='material-compact-login-animation/logins.html' class='btn btn-border-filled'>Login</a>";
                }

                 ?>

                <!-- <a href="#" class="btn btn-border">Get Started</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="intro-img">
              <img src="img/intro-mobile.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- features Section Start -->
    <div id="app-features" class="section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">features</p>
          <h2 class="section-title wow fadeIn" data-wow-delay="0.2s">Fitur Beebagi</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="content-left text-right">
              <div class="box-item left">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                <div class="text">
                  <h4>User Friendly</h4>
                  <p>Aplikasi dibuat sesimple mungkin agar mudah di gunakan.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lni-dashboard"></i>
                </span>
                <div class="text">
                  <h4> Intergrasi Komunitas </h4>
                  <p>Beebagi terintergrasi dengan banyak lembaga dan komunitas sosial.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lni-headphone-alt"></i>
                </span>
                <div class="text">
                  <h4>Admin Support</h4>
                  <p>Admin Support fast respon.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="show-box">
              <img src="img/features/app.png" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="content-right text-left">
              <div class="box-item right">
                <span class="icon">
                  <i class="lni-shield"></i>
                </span>
                <div class="text">
                  <h4>Berbagi Makanan</h4>
                  <p>Berbagi makanan dengan orang orang yang lebih membutuhkan yang di support oleh foodhero sekitar.</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lni-star-filled"></i>
                </span>
                <div class="text">
                  <h4>Berbagi Donasi</h4>
                  <p>Berbagi Donasi beebagi bekerjasama dengan local komunitas agar tepat dalam pembagiannya.</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lni-cup"></i>
                </span>
                <div class="text">
                  <h4>Berbagi Pakaian</h4>
                  <p>Berbagi pakaian terhadap korban bencana maupun masyarakat yang lebih membutuhkan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- features Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <a href="https://www.youtube.com/watch?v=BTOCAidL1bQ" class="video-popup"><i class="lni-film-play"></i></a>
                <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Cara Kerja Beebagi.id</h2>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Features Section Start -->
    <div id="features-two" class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="img/features/img1.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
              <div>
                <p class="btn btn-subtitle">Gimana Cara kerjanya?</p>
                <h3>Cara kerja Beebagi.id</h3>
                <p>Menghubungkan antara donatur dengan volunteer atau pengguna aplikasi yang menyalurkan donasi dari donatur Sebagai perantara penyebar informasi tentang bencana dan jenis donasi yang dibutuhkan.</p>
                <!-- <a class="btn btn-rm" href="#">Read More <i class="lni-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row mt">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper wow fadeInRight" data-wow-delay="0.9s">
              <div>
                <p class="btn btn-subtitle">Update</p>
                <h3>Free Updates!</h3>
                <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage.</p>
                <a class="btn btn-rm" href="#">Read More <i class="lni-arrow-right"></i></a>
              </div>
            </div>
          </div>
           <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="1.2s">
              <img class="img-fluid" src="img/features/img2.png" alt="">
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- Features Section End -->

    <!-- Awesome Screens Section Start -->
    <section id="screenshots" class="screens-shot section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Screenshots</p>
          <h2 class="section-title">App Screens</h2>
        </div>
        <div class="row">
          <div class="touch-slider owl-carousel">
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-1.png" alt="">
              </div>
            </div>
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-2.png" alt="">
              </div>
            </div>
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-3.png" alt="">
              </div>
            </div>
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-4.png" alt="">
              </div>
            </div>
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-5.png" alt="">
              </div>
            </div>
            <div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="img/screenshot/img-6.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Team</p>
          <h2 class="section-title">Our Expert Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-thumb">
                <img src="img/team/team1.png" alt="">
                <ul class="social-list">
                  <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Alif Shofa</h4>
                  <p>Consultant Management</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-thumb">
                <img src="img/team/team2.png" alt="">
                <ul class="social-list">
                  <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Nadira Alifia</h4>
                  <p>Business Developer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-thumb">
                <img src="img/team/team3.png" alt="">
                <ul class="social-list">
                  <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Enggar Muhammad</h4>
                  <p>Digital Marketer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-thumb">
                <img src="img/team/team4.png" alt="">
                <ul class="social-list">
                  <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Rima</h4>
                  <p>Marketer Officer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-thumb">
                <img src="img/team/team5.png" alt="">
                <ul class="social-list">
                  <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Thio Fauzi</h4>
                  <p>UI/UX Designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- Testimonial Section Start -->
    <!-- <section id="testimonial" class="section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Reviews</p>
          <h2 class="section-title">Clients Who Loved Us</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img1.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>Berbagi</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img2.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>Tesla Motors</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img3.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>Envato Customer</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img2.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>GrayGris Inc.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img1.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Testimonial Section End -->

    <!-- Clients Section -->
    <!-- <div id="clients" class="section"> -->
      <!-- Container Ends -->
      <!-- <div class="container"> -->
        <!-- Row and Scroller Wrapper Starts -->
        <!-- <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="img/clients/img1.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img2.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img3.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img4.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img5.png" alt="">
          </div>
        </div>
      </div>
    </div> -->
    <!-- Client Section End -->

    <!-- Subcribe Section Start -->
    <div id="subscribe" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="subscribe-form">
              <div class="form-wrapper">
                <div class="sub-title text-center">
                  <h3>Subscribe Untuk informasi selanjutnya</h3>
                  <!-- <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p> -->
                </div>
                <form>
                  <div class="row">
                    <div class="col-12 form-line">
                      <div class="form-group form-search">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        <button type="submit" class="btn btn-common btn-search">Subscribe</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subcribe Section End -->

    <!-- Start Pricing Table Section -->
    <!-- <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Pricing</p>
          <h2 class="section-title">Our Pricing Plan</h2>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table wow fadeInLeft" data-wow-delay="0.2s">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-rocket"></i>
                </div>
                <h2>Free</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>2 GB Storage</li>
                  <li>Single User</li>
                  <li>Sales Dashboard</li>
                  <li>Minimal Features</li>
                  <li>1000 Logs</li>
                </ul>
                <div class="price">$0<span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-active">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-drop"></i>
                </div>
                <h2>Standard</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>10 GB Hosting</li>
                  <li>5 Users</li>
                  <li>Sales Dashboard</li>
                  <li>Premium Features</li>
                  <li>50,000 Logs</li>
                </ul>
                <div class="price">$99 <span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-briefcase"></i>
                </div>
                <h2>Business</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>50 GB Hosting</li>
                  <li>Unlimited Users</li>
                  <li>Sales and Marketing Dashbaord</li>
                  <li>Premium Features</li>
                  <li>Unlimited Logs</li>
                </ul>
                <div class="price">$199 <span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> -->
    <!-- End Pricing Table Section -->

    <!-- download Section Start -->
    <!-- <section id="download">
      <div class="container">
        <div class="row"> -->

          <!-- <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="download-thumb wow fadeInLeft" data-wow-delay="0.2s">
              <img class="img-fluid" src="img/mac.png" alt="">
            </div>
          </div> -->
          <!-- <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="download-wrapper wow fadeInRight" data-wow-delay="0.2s">
              <div>
                <div class="download-text">
                  <h4>Download Our App From Store</h4>
                  <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
                </div>
                <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> From PlayStore<br></a>
                <a href="#" class="btn btn-apple"><i class="lni-apple"></i> From AppStore<br></a>
              </div>
            </div>
          </div> -->
        <!-- </div>
      </div>
    </section> -->
    <!-- download Section Start -->

    <!-- Blog Section -->
    <!-- <section id="blog" class="section"> -->
      <!-- Container Starts -->
      <!-- <div class="container">
         <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Blog</p>
          <h2 class="section-title">Recent News</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item"> -->
            <!-- Blog Item Starts -->
            <!-- <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img1.jpg" alt="">
                </a>
                <div class="author-img">
                  <img src="img/blog/author.png" alt="">
                </div>
              </div>
              <div class="blog-item-text">
                <h3><a href="single-post.html">How Proton Will Transform Your Business</a></h3>
                <div class="author">
                  <span class="name"><a href="#">Posted by Admin</a></span>
                  <span class="date float-right">10 April, 2020</span>
                </div>
              </div>
            </div> -->
            <!-- Blog Item Wrapper Ends-->
          <!-- </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item"> -->
            <!-- Blog Item Starts -->
            <!-- <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img2.jpg" alt="">
                </a>
                <div class="author-img">
                  <img src="img/blog/author.png" alt="">
                </div>
              </div>
              <div class="blog-item-text">
                <h3><a href="single-post.html">20 Growth Hacking Tips from Experts</a></h3>
                <div class="author">
                  <span class="name"><a href="#">Posted by Admin</a></span>
                  <span class="date float-right">10 April, 2020</span>
                </div>
              </div>
            </div> -->
            <!-- Blog Item Wrapper Ends-->
          <!-- </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item"> -->
            <!-- Blog Item Starts -->
            <!-- <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img3.jpg" alt="">
                </a>
                <div class="author-img">
                  <img src="img/blog/author.png" alt="">
                </div>
              </div>
              <div class="blog-item-text">
                <h3><a href="single-post.html">Proton Has Been Launched, Get Started!</a></h3>
                <div class="author">
                  <span class="name"><a href="#">Posted by Admin</a></span>
                  <span class="date float-right">10 April, 2020</span>
                </div>
              </div>
            </div> -->
            <!-- Blog Item Wrapper Ends-->
          <!-- </div>
        </div>
      </div>
    </section> -->
    <!-- blog Section End -->

    <!-- Map Section Start -->
    <section id="map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
              <object style="border:0; height: 450px; width: 100%;" data="https://maps.google.com/maps?q=telkom%20university&t=&z=13&ie=UTF8&iwloc=&output=embed"></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Section Start -->
    <section id="contact">
      <div class="contact-form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="offset-top">
              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
                  <div class="section-header">
                    <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s" >Join With Beebagi.id</p>
                    <h2 class="section-title"> Join as a Partner</h2>
                  </div>
                  <form id="contactForm">

                      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc48tgKS_5SqSGc_zFgVN1b3cchNvbkrIvWD3_rjKVfqf_qIQ/viewform?embedded=true" width="auto" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> <br>
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                        </div> -->
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div> -->
                      <div class="col-md-12">
                        <!-- <div class="form-group">
                          <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                          <div class="help-block with-errors"></div>
                        </div> -->
                      </div>
                      <div class="col-md-12">
                        <!-- <div class="form-group">
                          <textarea class="form-control" id="message" placeholder="Message" rows="7" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div> -->
                        <!-- <div class="submit-button">
                          <button class="btn btn-common btn-effect" id="submit" type="submit" >Submit</button>
                          <div id="msgSubmit" class="h3 hidden"></div>
                          <div class="clearfix"></div>
                        </div> -->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="img/logo.png" alt="">
              <div class="textwidget">
                <p>Platform aplikasi sosial berbasis android sebagai penghubung antara donatur dengan penerima bantuan melalui mediator volunteer untuk mengatasi permasalahan pembuangan makanan.</p>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Create a Free Account</h3>
                <ul class="menu">
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
              </div>
            </div> -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Resource</h3>
                <ul class="menu">
                  <li><a href="#">Comunnity</a></li>
                  <li><a href="#">Become a Partner</a></li>
                  <li><a href="#">Documentation</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Support</h3>
                <ul class="menu">
                  <li><a href="#">Terms & Condition</a></li>
                  <li><a href="#">Join Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Copyright Start  -->
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="site-info float-left">
                  <p>&copy; 2019 - Designed by <a href="https://www.instagram.com/beebagi.id/" rel="nofollow">Berbagi Berkah</a></p>
                </div>
                <div class="float-right">
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
