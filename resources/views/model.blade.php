<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('assets/IMG/logo_unib.png') }}">
  <title>LPTIK - Petunjuk Pengerjaan</title>


  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <div class="position-relative overflow-hidden  " style="background-color: #292256;border-bottom: 10px solid #FFF000; box-shadow: 0px 0px 50px 50px #c1c1c1">
    <div class="row ">
      <a href="{{ route('welcome') }}" class="col-md-3 p-3 ">
        <img class="w3-image" style="margin-left: 30px ;" src="{{ asset('assets/IMG/logo_unib.png') }}" alt="LOGO UNIB" width="50" height="50">
        <img class="w3-image" src="{{ asset('assets/IMG/lptik.png') }}" alt="LOGO LPTIK" width="50" height="50">
      </a>
      <div class="col-md-9 float-end " style="float: right; text-align: right;padding-right: 30px ; margin-top: auto; margin-bottom: auto; ">
        <b style="color:#FFF000;letter-spacing: 2px;font-size: 30px;font-weight: 900;">LPTIK </b>
        <b style="color: #fff; font-size: 20px; font-family: arial;font-weight: 700">#TerusBerinovasi</b>
      </div>



    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>

  <div class="row text-center container mx-auto" style="margin-top: 8%;">
    <div class="col-md-4 ">
      <img src="{{asset('undraw_mobile_application_re_13u3.svg')}}">
    </div>
    <div class="col-md-1 "></div>

    <div class="col-md-7">
      <div style="background-color:#292256 ;color: #fff;padding: 6%  ;border-radius: 30px;">
        <p style="font-family: 'Times New Roman', Times, serif; text-align: left;font-size: 28px !important;">Hai! <span style="color:yellow; font-weight: 900;">{{ Session::get('nama') }} </span></p>
        <p style="font-family: 'Times New Roman', Times, serif; text-align: left;font-size: 20px !important;color:#ccc">
          Ayo Kerjakan Kuis nya dengan Jawab pertanyaan yang diajukan dengan memeilih jawaban yang menurut Anda benar. Pertanyaan yang diajukan adalah pertanyaan tentang pengetahuan umum, pengetahuan tentang teknologi<br><br><span style="color:#ccc">Ada <b style="color: yellow">{{$setting->banyak_soal}} Soal</b> yang dikerjakan selama <b style="color: yellow">{{ $setting->lama_pengerjaan_menit }} menit</b>, dimulai dari Anda menekan tombol "<b style="color: yellow">mulai</b>" dibawah ini</span>.</p>
        </p>
        <a href="{{ route('main_game') }}" class="btn  btn-mulai" sty>Mulai</a>
      </div>

    </div>
  </div>
  <footer id="footer" class="footer" style="position: absolute; width: 100%; bottom: 0;text-align: center;font-size: 14px; ">
    <div class="footer-legal" style="background-color: #29235c;">
      <div class="container container-footer">
        <div class="copyright text-white" style="padding: 5px 0px;">
          &copy; UNIB Fair <strong><span>Universitas Bengkulu</span></strong>. 2022
        </div>
        <div class="credits text-white">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          Lembaga Pengembangan Teknologi Informasi dan Komunikasi <a href="https://lptik.unib.ac.id">LPTIK</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>
<script>
  localStorage.removeItem('counter');
</script>

</html>
