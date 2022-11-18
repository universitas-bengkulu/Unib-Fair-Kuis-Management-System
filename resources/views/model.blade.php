
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../IMG/lptik.png">
    <title>Menu-UNIB FAIR-LPTIK</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link href="{{ asset('assets/CSS/style.css') }}" rel="stylesheet">
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

    <div class="row text-center" style="margin-top: 8%;" >
    <div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:#292256 ;color: #fff;padding: 5% 0px 5% 0px;border-radius: 30px;">
        <h3 style="font-family: 'Times New Roman', Times, serif;">PETUNJUK!</h3>
        <p class="text-menu" style="font-family: 'Times New Roman', Times, serif;">Jawablah pertanyaan yang diajukan dengan memeilih jawaban yang menurut Anda benar. Pertanyaan yang diajukan adalah pertanyaan tentang pengetahuan umum, pengetahuan tentang Bengkulu, dan pengetahuan umum seputar Universitas Bengkulu,<br>Waktu Anda 5 menit dimulai dari Anda menekan tombol "mulai" dibawah ini.</p>
        <a href="{{ route('main_game') }}" class="btn  btn-mulai">Mulai</a>
    </div>
  </body>
</html>

