<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\SettingController;
use App\Models\Nilai;
use App\Models\Pertanyaan;
use App\Models\Setting;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $pertanyaans = Pertanyaan::take(50)->get()->random(15);
    return view('welcome',
    // [
    //     'pertanyaans'   =>  $pertanyaans
    // ]
);
})->name('welcome');

Route::get('/buku_tamu', function () {
    return view('form');
})->name('buku_tamu');
Route::post('/buku_tamu',[BukuTamuController::class, 'post'])->name('buku_tamu_post');
Route::post('/kuis',[BukuTamuController::class, 'kuisPost'])->name('kuis.post');

// Route::get('/form_buku_tamu', function () {
//     return view('form');
// })->name('form_buku_tamu');


// Route::get('/menu_lptik_unibfair', function () {
//     return view('menu');
// })->name('menu_lptik_unibfair');

Route::get('/start_kuis', function () {
    if (Session::get('isLogin', 0) == 1) {
        $setting = Setting::first();
        return view('model', [
            'setting'   =>  $setting
        ] );
    } else {
        return redirect()->route('welcome');
    }
})->name('start_kuis');

Route::get('/nilai', function () {
    if (Session::get('nilai')  ) {
        $tampil_nilai = Session::get('nilai');
        $nilai = Nilai::join('users', 'users.id', 'nilais.user_id')->select('nama', 'nilai', 'total_waktu')->orderby('nilai', 'desc')->orderBy('total_waktu', 'asc')->take(50)->get();
        return view('nilai', [
            'leaderboard'   =>  $nilai,
            'nilai'   =>  $tampil_nilai,
        ]);
    } else {
        return redirect()->route('welcome');
    }
})->name('nilai');

// Route::get('/profil_lptik', function () {
//     return view('profil');
// })->name('profil_lptik');

Route::get('/main_game', function () {
    if (Session::get('isLogin', 0) == 1) {
        $soal = Setting::first();
        $pertanyaans = Pertanyaan::get()->random($soal->banyak_soal);
        $time = Carbon\Carbon::now();
        $waktu = $time->toDateTimeString();
        $nilai = Nilai::join('users', 'users.id', 'nilais.user_id')->select('nama', 'nilai', 'total_waktu')->orderby('nilai', 'desc')->orderBy('total_waktu', 'asc')->take(50)->get();
        Session::put('time', $waktu);
        return view('kuis', [
            'pertanyaans'   =>  $pertanyaans,
            'nilai'   =>  $nilai,
            'waktu'   =>  $soal->lama_pengerjaan_menit,
        ]);
    } else {
        return redirect()->route('welcome');
    }

})->name('main_game');

// Route::get('/kuis', function () {
//     if (Session::get('isLogin', 0) == 1) {
//         $pertanyaans = Pertanyaan::take(50)->get()->random(15);
//         return view('kuis', [
//             'pertanyaans'   =>  $pertanyaans
//         ]);
//     } else {
//         return redirect()->route('welcome');
//     }
// })->name('kuis');


Route::get('/setting-kuis', [SettingController::class, 'index'])->name('setting_kuis');
Route::post('/setting-post', [SettingController::class, 'post'])->name('setting.post');
