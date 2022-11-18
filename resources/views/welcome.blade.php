
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova Bootstrap Template - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <style>
        .container-footer, .footer-legal {
            position: fixed; 
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
        }
        .cta-btn{
            font-family: var(--font-default);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px 10px 10px 0px;
            color: #29486a;
            background: #fff;
            border: 3px #29235c solid;
        }

        .cta-btn:hover{
            color: #ffed00;
            background: #29235c;
            border: 3px #29486a solid;
        }
  </style>

  <!-- =======================================================
  * Template Name: Nova - v1.2.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-about">
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/bg.webp'); padding:20px 0px 20px 0px !important" >
      <div class="container position-relative d-flex flex-column align-items-center" >

            <div style="width: 100%;text-align: center !important;">
                <img src="{{ asset('assets/img/unib.png') }}" style="height:80px !important;margin-left: auto !important;margin-right: auto !important;" alt="">
                <img src="{{ asset('assets/img/lptik.png') }}" style="height:80px !important;margin-left: auto !important;margin-right: auto !important;" alt="">
            </div>
            <h2 style="font-size: 40px; font-weight:bold; color:#ffed00">SELAMAT DATANG DI UNIB FAIR 2022</h2>
            <p style="margin: 0px !important; color:white; font-weight:bold;">LEMBAGA PENGEMBANGAN TEKNOLOGI INFORMASI DAN KOMUNIKASI (LPTIK)</p>

      </div>
     
    </div>
    <div class="kedua"style="background-image: url('assets/img/bg.webp'); border-bottom:4px #a0a0a0 solid; height:20px !important;">
    </div><!-- End Breadcrumbs -->

    <section id="why-us" class="why-us" style="margin-top: 20px !important;">
      <div class="container" data-aos="fade-up">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-5 img-bg" style="background-image: url('assets/img/vector.jpg');height: 400px; !important;min-height:400px; max-height:400px !important;" ></div>
                <div class="col-xl-7 slides  position-relative" style="height: 400px !important;">
                    <div class="slides-1 swiper" style="margin:100px 60px 40pc 60px !important;">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="item">
                                    <h4 class="mb-3" style="text-align: justify">
                                        Selamat datang di stand Lembaga Pengembangan Teknologi Informasi dan Komunikasi (LPTIK) pada gelaran UNIB Fair 2022. Kami menyediakan informasi umum seputar LPTIK, game menarik yang bisa anda mainkan, UNIB Virtual Tour, serta dapatkan hadian dan doorprize menarik dari kami.
                                    </h4>
                                </div>
                                <a class="cta-btn" href="{{ route('buku_tamu') }}">Isi Buku Tamu</a>
                            </div><!-- End slide item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="footer-legal" style="background-color: #29235c;">
      <div class="container container-footer">
        <div class="copyright text-white">
          &copy; UNIB Fair <strong><span>Universitas Bengkulu</span></strong>. 2022
        </div>
        <div class="credits text-white">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          Lembaga Pengembangan Teknologi Informasi dan Komunikasi <a href="https://bootstrapmade.com/">LPTIK</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>