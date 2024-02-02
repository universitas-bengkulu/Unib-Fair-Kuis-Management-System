
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/IMG/logo_unib.png') }}">
    <title>LPTIK - Menu</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link href="{{ asset('assets/CSS/style1.css') }}" rel="stylesheet">
  </head>

  <body>
      <!-- Header -->
      <div class="position-relative overflow-hidden  " style="background-color: #292256;border-bottom: 10px solid #FFF000; box-shadow: 0px 0px 50px 50px #c1c1c1">
        <div class="row ">
          <div class="col-md-3 p-3 " >
              <img class="w3-image" style="margin-left: 30px ;" src="{{ asset('assets/IMG/logo_unib.png') }}" alt="LOGO UNIB" width="50" height="50">
          <img class="w3-image" src="{{ asset('assets/IMG/lptik.png') }}" alt="LOGO LPTIK" width="50" height="50">
          </div>
          <div class="col-md-9 float-end " style="float: right; text-align: right;padding-right: 30px ; margin-top: auto; margin-bottom: auto; " >
                  <b style="color:#FFF000;letter-spacing: 2px;font-size: 30px;font-weight: 900;">LPTIK | UNIB FAIR 2022</b>
                  <b style="color: #fff; font-size: 20px; font-family: arial;font-weight: 700">#TerusBerinovasi</b>
          </div>



        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
      </div>

    <div class="row text-center" style="margin-top: 5%;" >
    <div class="col-md-4">
        <img class="w3-image" src="{{ asset('assets/IMG/lptik.png') }}" alt="LOGO UNIB" width="400" height="400">
        <p class="text-menu">Informasi umum seputar Lembaga Pengembangan Teknologi Informasi Dan Komunikasi (LPTIK) UNIB</p>
        <a href="{{ route('profil_lptik') }}" class="btn btn-outline-secondary submit-menu" style="right:1450px">Profil LPTIK</a>
    </div>
    <div class="col-md-4">
        <img class="w3-image" src="{{ asset('assets/IMG/puzzle.png') }}" alt="LOGO UNIB" width="400" height="400">
        <p class="text-menu">Mainkan <i>game</i>, dan raihlah skor tertinggi. Bagi yang beruntung Anda bisa mendapatkan <i>doorprize</i> menarik dari kami</p>
        <a href="{{ route('start_kuis') }}" class=" btn btn-outline-secondary submit-menu" style="right:800px">Main Game</a>
    </div>
    <div class="col-md-4">
        <img class="w3-image" style="margin: 40px;" src="{{ asset('assets/IMG/logo_unib.png') }}" alt="LOGO UNIB" width="330" height="330">
        <p class="text-menu">Jelajahi lokasi dan tempat-tempat menarik di Universitas Bengkulu menggunakan <i>Virtual Tour</i></p>
        <a href="https://virtualtour.sikosan.com" class="btn btn-outline-secondary submit-menu" style="right:150px">UNIB Virtual Tour</a>

    </div>
  </body>
</html>
