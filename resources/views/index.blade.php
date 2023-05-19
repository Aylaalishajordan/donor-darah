<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Donor Darah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
    
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Medical Care</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#contact">contact</a></li>
          <header style="margin-left: 20px">
            @if (Auth::check())
                @if (Auth::user()->role === 'admin')
                    <a href="{{route('data')}}" class="login-btn">Lihat Data</a>  
                @elseif (Auth::user()->role == 'petugas')
                    <a href="{{route('data.petugas')}}" class="login-btn">Lihat Data</a>
                @endif
    
            @else
            <a href="{{route('login')}}" class="login-btn">login</a>
            @endif
        </header>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Donate Your Blod With Us, Now!</h2>
          <p>Every 1 minute, there are 5-10 people in Indonesia who need blood donors.</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/donor-darah.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal-check"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fill the form </a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-square-dots"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Wait for confirmation</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Visit the location hospital</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-check2-circle"></i></div>
              <h4 class="title"><a href="" class="stretched-link">thank you for donating your blood</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
   

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/darah.png" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Donors</strong> Registered</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="3112" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hospitals</strong> in Indonesia</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="5100" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Donors</strong> Given to hospitals throughout Indonesia</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Contact</h2>
            <p>Fill out the form below to donate your blood</p>
          </div>
  
          <div class="row gx-lg-0 gy-4">
  
            <div class="col-lg-4">
  
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>Jl. Kresna Raya No.43a, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>83428645</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Open Hours:</h4>
                    <p>Mon-Sat:  08.00-20.30</p>
                  </div>
                </div><!-- End Info Item -->
              </div>
  
            </div>
  
            <div class="col-lg-8">

              @if ($errors->any())
              <ul style="width: 100%; background: red; padding: 10px">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}<li>
              @endforeach
              </ul>
              @endif
              
              @if (Session::get('succes'))
              <div style="width: 100%; backgound: green; padding: 10px">
              {{ Session::get('succes') }}
              </div>
              @endif 
              
              <form action="{{route('store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div style="margin-left: 30px; margin-top: 10px;" class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div style="margin-left: 30px; margin-top: 10px;" class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="row">
                <div style="margin-left: 30px; margin-top: 10px;" class="col-md-6 form-group">
                  <input type="text" class="form-control" name="age" id="age" placeholder="age" required>
                </div>
                <div style="margin-left: 30px; margin-top: 10px;" class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="bb" id="bb" placeholder="weight" required>
                </div>
                <div style="margin-left: 30px; margin-top: 10px;" class="form-group mt-3">
                  <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Phone number" required>
                </div>
                <div style="margin-left: 30px; margin-top: 10px;" >
                  <select name="golongan" id="golongan">
                    <option selected hidden disabled>Golongan darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                  </select>
                </div>
                  
                <div style="margin-left: 30px; margin-top: 10px;" class="form-group mt-3">
                  <textarea class="form-control" name="pesan" rows="7" placeholder="Message" required></textarea>
                </div>
                <div style="margin-left: 30px; margin-top: 10px;" class="form-control">
                  <label for="">Upload Related Images :</label>
                  <input type="file" name="foto">
              </div>
                
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
              </form>
            </div>
          </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Impact</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/pmikotabogor43a" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/pmikotabogor43A/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/uddpmikotabogor/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://id.linkedin.com/company/rumah-sakit-palang-merah-indonesia-bogor?original_referer=https%3A%2F%2Fwww.google.com%2F" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> (0251) 83428645<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>