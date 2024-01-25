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

  <link href="{{ asset('assets/CSS/style.css') }}" rel="stylesheet">
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

  <div class="row text-center" style="margin-top: 8%;">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:#292256 ;color: #fff;padding: 3% 0px 3% 0px;border-radius: 30px;">
      <h3 style="font-family: arial; font-weight: 900; font-size: 32px;text-shadow:5px 1px 10px #000;">PETUNJUK!</h3>
      <p class="text-menu" style="font-family: 'Times New Roman', Times, serif;width: 80% !important;">Jawablah pertanyaan yang diajukan dengan memeilih jawaban yang menurut Anda benar. Pertanyaan yang diajukan adalah pertanyaan tentang pengetahuan umum, pengetahuan tentang teknologi.<br><br><span style="color:#999">Waktu Anda 5 menit dimulai dari Anda menekan tombol "<b style="color: yellow">mulai</b>" dibawah ini</span>.</p>
      <a href="{{ route('main_game') }}" class="btn  btn-mulai" sty>Mulai</a>
    </div>
</body>

</html>
