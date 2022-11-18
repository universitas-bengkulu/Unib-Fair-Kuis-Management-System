<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profil LPTIK</title>
		<link rel="icon" href="{{ asset('assets/profile/images/logo_unib.png') }}">

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="{{ asset('assets/profile/css/animate.min.css') }}">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('assets/profile/css/bootstrap.min.css') }}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{ asset('assets/profile/css/font-awesome.min.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="{{ asset('assets/profile/css/templatemo-style.css') }}">
		<style>
			.material-icons {
		font-family: 'Material Icons';
		font-weight: normal;
		font-style: normal;
		font-size: 24px;  /* Preferred icon size */
		display: inline-block;
		line-height: 1;
		text-transform: none;
		letter-spacing: normal;
		word-wrap: normal;
		white-space: nowrap;
		direction: ltr;

		/* Support for all WebKit browsers. */
		-webkit-font-smoothing: antialiased;
		/* Support for Safari and Chrome. */
		text-rendering: optimizeLegibility;

		/* Support for Firefox. */
		-moz-osx-font-smoothing: grayscale;

		/* Support for IE. */
		font-feature-settings: 'liga';
		}
		</style>
	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="" style="padding: 10px 10% 10px 5%;">
				<div class="navbar-header">
					<img src="{{ asset('assets/profile/images/logo.png') }}" alt="LPTIK" >
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Home</a></li>
						<li><a href="#divider">Bidang</a></li>
						<li><a href="#pricing">Struktur</a></li>
						<li><a href="#feature"  onclick="playPause()">Video</a></li>
						<li><a href="#download">Partners</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
				</ol>
				<div class="carousel-inner" >
					<div class="item active" style=" width: 100%; height: 900px; ">
						<img src="{{ asset('assets/profile/images/home.png') }}" alt="First slide" style=" width: 100%; height: 100%; ">
					</div>
					<div class="item" style=" width: 100%; height: 900px;">
						<img src="{{ asset('assets/profile/images/home2.png') }}" alt="Second slide" style=" width: 100%; height: 100%; ">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="fa fa-angle-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="fa fa-angle-right"></span>
				</a>
			</div>
		</section>

		<!-- end home -->
		<!-- start divider -->
		<section id="divider">
			<div class="text-center fadeInLeft" data-wow-delay="0.6s" style="padding: 10px 10%;" >
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-2 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-laptop" style="background-color: #29235c; padding: 30px; border-radius: 30px; color: #fff; box-shadow: 0px 0px 20px 2px #ccc;font-size: 130px;"></i>
						<h3 class="text-uppercase" style="text-shadow: 2px 2px #FFF000">Pusat Diklat</h3>
						<p>Pusat Diklat merupakan divisi yang menangani hal-hal yang bersangkutan dengan Pendidikan Seperti tes CBT, Serdos, pelatihan dan Workshop yang di adakan oleh LPTIK Universitas Bengkulu. </p>
					</div>

					<div class="col-md-2 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-wifi" style="background-color: #29235c; padding: 30px; border-radius: 30px; color: #fff; box-shadow: 0px 0px 20px 2px #ccc;font-size: 130px;"></i>
						<h3 class="text-uppercase" style="text-shadow: 2px 2px #FFF000">PUSAT JARINGAN</h3>
						<p>Pusat Jaringan LPTIK merupakan salah satu unit kerja (divisi) di LPTIK Universitas Bengkulu yang bertanggung jawab terhadap seluruh jaringan internet dan wifi di selingkung Universitas Bengkulu. </p>
					</div>
					<div class="col-md-2 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-keyboard-o" style="background-color: #29235c; padding: 30px; border-radius: 30px; color: #fff; box-shadow: 0px 0px 20px 2px #ccc;font-size: 130px;"></i>

						<h3 class="text-uppercase" style="text-shadow: 2px 2px #FFF000">PUSAT SIM</h3>
						<p>Pusat SIM (Divisi Sistem Informasi Manajemen) merupakan Divisi yang menangani Perkembangan Sistem Informasi di Selingkung Universitas Bengkulu. </p>
					</div>
					<div class="col-md-2 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-server" style="background-color: #29235c; padding: 30px; border-radius: 30px; color: #fff; box-shadow: 0px 0px 20px 2px #ccc;font-size: 130px;"></i>
						<h3 class="text-uppercase" style="text-shadow: 2px 2px #FFF000">USAT DATA DAN INFORMASI</h3>
						<p>Pusat Data dan Informasi merupakan Divisi yang menyediakan keperluan data dan informasi yang bersifat publik. </p>
					</div>
					<div class="col-md-2 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-lightbulb-o" style="background-color: #29235c; padding: 30px 60px; border-radius: 30px; color: #fff; box-shadow: 0px 0px 20px 2px #ccc;font-size: 130px;"></i>

						<h3 class="text-uppercase" style="text-shadow: 2px 2px #FFF000">PUSAT INOVASI</h3>
						<p>Pusat Pengembangan Inovasi memiliki tugas yaitu memberikan dan menyiapkan gagasan di LPTIK Universitas Bengkulu baik Inovasi bidang Tridarma juga Inovasi bidang Komersialisasi. </p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->



		<!-- start pricing -->
		<section id="pricing">
			<div class="" style="padding: 0px 10%;">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase" style="font-size: 50px; font-weight: 900;text-shadow: 4px 4px #FFF000;">Struktur LPTIK</h2>
					</div>
					<div class="wow bounceIn">
					<img src="{{ asset('assets/profile/images/Struktur.jpg') }}" alt="struktur" width="100%" height="100%" >


					</div>

				</div>
			</div>
		</section>
		<!-- end pricing -->
		<section id="feature">
			<div class="overlay">
				<div class="" style="padding: 0px 5%;" >
					<div class="row" >
					<h2 class="text-uppercase wow bounceIn" style="font-size: 50px; font-weight: 900;text-shadow: 4px 4px #FFF000;" onclick="playPause()">Video</h2>

						<div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
							<video id="video1" width="400" height="240" muted loop autoplay>
								<source src="{{ asset('assets/profile/video/skd-cpns-pemprov-bengkulu-formasi-tahun-2021.mp4') }}" type="video/mp4">

							  </video>
						</div>
						<div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
							<video id="video2" width="400" height="240" muted loop autoplay>
								<source src="{{ asset('assets/profile/video/pelatihan-ojs-3-bagi-pengelola-jurnal-unib-10-11-maret-2022.mp4') }}" type="video/mp4">
							  </video>
						</div>
						<div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
							<video id="video3" width="400" height="240" muted loop autoplay>
								<source src="{{ asset('assets/profile/video/pelatihan-e-learning-bagi-dosen-baru-universitas-bengkulu-08-maret-2022.mp4') }}" type="video/mp4">
							  </video>
						</div>
						<div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
							<video id="video4" width="400" height="240" muted loop autoplay>
								<source src="{{ asset('assets/profile/video/PELATIHAN CANVA BAGI DOSEN UNIVERSITAS BENGKULU - 15 MARET 2022.mp4') }}" type="video/mp4">
							  </video>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>


		<!-- start download -->
		<section id="download">
			<div class="container">
				<div class="row">
					<h2 class="text-uppercase wow bounceIn" style="font-size: 50px; font-weight: 900;text-shadow: 4px 4px #FFF000;">Our  Partners</h2>
					<section class="customer-logos slider wow bounceIn">
						<div class="slide"><img src="{{ asset('assets/profile/images/telkom.png') }}"></div>
						<div class="slide"><img src="{{ asset('assets/profile/images/telkomsel.png') }}"></div>
						<div class="slide"><img src="{{ asset('assets/profile/images/indosat.jpg') }}"></div>
						<div class="slide"><img src="{{ asset('assets/profile/images/gasnet.png') }}"></div>
						<div class="slide"><img src="{{ asset('assets/profile/images/ltmpt.jpg') }}"></div>
						<div class="slide"><img src="{{ asset('assets/profile/images/mikrotik.jpg') }}"></div>
					</section>
					</div>
				</div>
			</div>
		</section>
		<!-- end download -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay" >
				<div class="" style="padding: 0px 10%;" >
					<div class="row" >
						<div class="col-md-7 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contact LPTIK Universitas Bengkulu</h2>
							<address>
								<p><i class="fa fa-map-marker"></i>Jl. W.R. Supratman Kandang Limun Bengkulu 38371 A Gedung LPTIK.</p>
								<p><i class="fa fa-phone"></i>  +62 736 21170 and 21884</p>
								<p><i class="fa fa-fax"></i>  +62 736 22105</p>
								<p><i class="fa fa-envelope-o"></i> lptik@unib.ac.id</p>
							</address>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer style="background-color: #29235c;">
			<div class="container" >
				<div class="copyright text-white" style="color: #fff ;">
				  © UNIB Fair <strong><span>Universitas Bengkulu</span></strong>. 2022
				</div>
				<div class="credits text-white" style="color:#ccc">
				  <!-- All the links in the footer should remain intact. -->
				  <!-- You can delete the links only if you purchased the pro version. -->
				  <!-- Licensing information: https://bootstrapmade.com/license/ -->
				  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
				  Lembaga Pengembangan Teknologi Informasi dan Komunikasi <a href="https://lptik.unib.ac.id/">LPTIK</a>
				</div>
			</div>
		</footer>

		<!-- end footer -->

		<script src="{{ asset('assets/profile/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/profile/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/profile/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/profile/js/jquery.singlePageNav.min.js') }}"></script>
		<script src="{{ asset('assets/profile/js/custom.js') }}"></script>
		<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

	</body>
</html>
<style>
	h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
</style>
<script>
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

