<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPTIK - Kuis</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/IMG/logo_unib.png') }}" rel="icon">

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
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <style>
        .container-footer,
        .footer-legal {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
        }

        .cta-btn {
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

        .cta-btn:hover {
            color: #ffed00;
            background: #29235c;
            border: 3px #29486a solid;
        }
    </style>
    @include('countdown')

    <!-- =======================================================
  * Template Name: Nova - v1.2.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-about" onload="countDown()">
    <!-- ======= Header ======= -->
    <header id="header" style="padding: 10px !important;" class="header d-flex align-items-center fixed-top" style="background:#29235c">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('welcome') }}" class="    align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{ asset('assets/img/unib.png') }}" style="height:60px !important;" alt="">
                <img src="{{ asset('assets/img/lptik.png') }}" style="height:60px !important;" alt="">
            </a>


            <nav id="navbar" class="navbar">
                <div class="   " style="float: right; text-align: right;padding-right: 30px ; margin-top: auto; margin-bottom: auto; ">
                    <b style="color:#FFF000;letter-spacing: 2px;font-size: 30px;font-weight: 900;">LPTIK </b>
                    <b style="color: #fff; font-size: 20px; font-family: arial;font-weight: 700">#TerusBerinovasi</b>
                </div>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="padding: 0px 0px 85px 0px !important;; min-height:80px">
            <div class="container position-relative d-flex flex-column align-items-center">


            </div>

        </div>
        <section id="why-us" class="why-us" style="margin-top: 20px !important;">
            <div class="container" data-aos="fade-up">

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{ route('kuis.post') }}" method="POST">
                        {{ csrf_field() }} {{ method_field("POST") }}
                        <div class="row">
                            <div class="col-md-12">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <strong>{!! $message !!}</strong>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <strong>{!! $message !!}</strong>
                                </div>
                                @endif
                                </b>

                            </div>
                            <div class="col-md-8" style="overflow:auto; height:75vh !important;">
                                <div style="background-color:#eee ;color: #000;padding: 6%  ;border-radius: 30px;box-shadow: 2px 2px 10px #999;">
                                    <p style="font-family: 'Times New Roman', Times, serif; text-align: center;font-size: 48px !important;">Nilai Kuis Kamu </p>
                                    <p style="font-family: 'Times New Roman', Times, serif; text-align: center;font-size: 120px !important;color:#000; font-weight: 900;">
                                        {{ Session::get('nilai' ) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" style="padding:15px !important;background:#29235c; color:#ffed00; text-align:center">
                                            Leader Board
                                        </div>
                                        <div class="card-body" style="overflow:auto; max-height:70vh !important; padding: 0px;">
                                            <table class="table table-hover table-bordered" style="width: 100%;text-align: center; margin: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama User</th>
                                                        <th>Skor</th>
                                                        <th>Waktu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($leaderboard as $index => $nilai)
                                                    <tr>
                                                        <td>{{ $index+1 }}</td>
                                                        <td style="font-size:13px;text-align: left;">{{ $nilai->nama }}</td>
                                                        <td>{{ $nilai->nilai }}</td>
                                                        <td>{{ floor($nilai->total_waktu / 60)!=0? floor($nilai->total_waktu / 60).' Menit' :''  }} {{ $nilai->total_waktu % 60 }} Detik</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:15px;">
                                    <a href="{{route('welcome')}}" style="width: 100%; padding:10px !important;  " class="btn btn-warning"><i class="fa fa-check-circle"></i>&nbsp; Kembali</a>
                                </div>
                            </div>

                        </div>
                    </form>
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
