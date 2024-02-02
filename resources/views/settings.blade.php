<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/IMG/logo_unib.png') }}">
    <title>LPTIK </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('assets/CSS/style1.css') }}" rel="stylesheet">

</head>

<body class="  mx-auto " style="width: 70%; margin-top:10% ;">
    <form action="{{ route('setting.post') }}" id="contactForm" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-3 col-form-label " style="font-weight: 900;">Banyak Soal </label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="soal" value="{{$setting->banyak_soal}}">
                @error('soal')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-3 col-form-label " style="font-weight: 900;">Lama Pengerjaan (menit)</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="waktu" value="{{$setting->lama_pengerjaan_menit}}">
                @error('waktu')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="staticEmail" class="col-sm-3 col-form-label  text-danger" style="font-weight: 900;">Reset Nilai</label>
            <div class="col-sm-9">
                <select class="form-select" aria-label="Default select example" name="reset">
                    <option value="0">TIDAK</option>
                    <option value="1">RESET</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-3 col-form-label " style="font-weight: 900;">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" name="password">
                @error('password')
                <span class="text-danger " style="margin-top: -10px;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <input type="submit" style="width: 100%;" name="submit" value="SIMPAN" class="btn btn-success ">
    </form>

</body>

</html>
