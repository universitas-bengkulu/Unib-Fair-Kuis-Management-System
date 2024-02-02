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

  <link href="{{ asset('assets/CSS/style1.css') }}" rel="stylesheet">

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
      <img class="w3-image" src="{{ asset('undraw_interview_re_e5jn.svg') }}" alt="LOGO " width="600" height="600">
    </div>
    <div class="col-md-6">
      <section id="contact">
        <div id="form">
          @if(session('error'))
          <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
          @endif
          <form action="{{ route('buku_tamu_post') }}" id="contactForm" method="post">
            @csrf
            <div class=" mb-3 row">
              <div class="col-md-2  "><span>Nama</span></div>
              <div class="col-md-10   ">
                <input type="text" name="nama" class="name" placeholder="Masukkan Nama Lengkap Anda" value="{{old('nama')}}">
                @error('nama')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class=" mb-3 row">
              <span for="inputPassword" class="col-sm-2 col-form-label">Pekerjaaan/ Sekolah</span>
              <div class="col-sm-10">
                <input type="text" name="pekerjaan" class="name" placeholder="Pekerjaaan/ Sekolah" value="{{old('pekerjaan')}}">
                @error('pekerjaan')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class=" mb-3 row">
              <span for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</span>
              <div class="col-sm-10">
                <select class="select" name="jenis_kelamin" aria-label="Default select example" tabindex=2>
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class=" mb-3 row">
              <span for="inputPassword" class="col-sm-2 col-form-label">Alamat</span>
              <div class="col-sm-10">
                <textarea class="Alamat" name="alamat" placeholder="Alamat" tabindex=3>{{old('alamat')}}</textarea>
                @error('alamat')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <input type="submit" style="padding: 10px 0px;" name="submit" value="SIMPAN" class="submit" tabindex=5>

          </form>
        </div>
      </section>
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
  <script>
    localStorage.removeItem('counter');
  </script>
</body>

</html>
