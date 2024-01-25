<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('assets/IMG/logo_unib.png') }}">
  <title>LPTIK - Buku Tamu</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ asset('assets/CSS/style.css') }}" rel="stylesheet">

</head>

<body>
  <div class="position-relative overflow-hidden  " style="background-color: #292256;border-bottom: 10px solid #FFF000; box-shadow: 0px 0px 50px 50px #c1c1c1">
    <div class="row  ">
      <a href="{{ route('welcome') }}" class="col-md-3 p-3 ">
        <img class="w3-image" style="margin-left: 30px ;" src="{{ asset('assets/img/logo_unib.png') }}" alt="LOGO UNIB" width="50" height="50">
        <img class="w3-image" src="{{ asset('assets/img/lptik.png') }}" alt="LOGO LPTIK" width="50" height="50">
      </a>
      <div class="col-md-9 float-end " style="float: right; text-align: right;padding-right: 30px ; margin-top: auto; margin-bottom: auto; ">
        <b style="color:#FFF000;letter-spacing: 2px;font-size: 30px;font-weight: 900;">LPTIK </b>
        <b style="color: #fff; font-size: 20px; font-family: arial;font-weight: 700">#TerusBerinovasi</b>
      </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>
  <div class="row container mx-auto" style="margin-top: 40px;">

    <div class="col-md-6">
      <img class="w3-image" src="{{ asset('assets/IMG/1.webp') }}" alt="LOGO " width="600" height="600">
    </div>
    <div class="col-md-6">
      <section id="contact">
        <div id="form">
          <form action="{{ route('buku_tamu_post') }}" id="contactForm" method="post">
            @csrf
            <span>Nama</span>
            <input type="text" name="nama" class="name" required placeholder="Masukkan Nama Lengkap Anda" tabindex=1 />
            <span>Pekerjaaan/ Sekolah</span>
            <input type="text" name="pekerjaan" required class="name" placeholder="Pekerjaaan/ Sekolah" tabindex=1 />
            <span>Jenis Kelamin</span>
            <select class="select" required name="jenis_kelamin" aria-label="Default select example" tabindex=2>
              <option>Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
            <span>Alamat</span>
            <textarea class="Alamat" name="alamat" required placeholder="Alamat" tabindex=3></textarea>
            <input type="submit" style="padding: 10px 0px;" name="submit" value="SIMPAN" class="submit" tabindex=5>
          </form>
        </div>
      </section>
    </div>
  </div>

</body>

</html>
