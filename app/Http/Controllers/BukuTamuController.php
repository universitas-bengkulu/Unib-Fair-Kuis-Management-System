<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Jawaban;
use App\Models\Setting;
use App\Models\Pertanyaan;
use App\Models\JawabanUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BukuTamuController extends Controller
{
    public function post(Request $request)
    {

        $rules = [
            'nama' => 'required',
            'pekerjaan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];

        $messages = [
            'required' => ':attribute harus diisi.',
        ];

        $attributes = [
            'nama' => 'Nama',
            'pekerjaan' => 'Pekerjaan Atau Sekolah',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()->route('buku_tamu')->withErrors($validator)->withInput();
        }

        $user = User::create([
            'nama'  =>  $request->nama,
            'pekerjaan'  =>  $request->pekerjaan,
            'jenis_kelamin'  =>  $request->jenis_kelamin,
            'alamat'  =>  $request->alamat,
        ]);


        $sessionData = [
            'id' => $user->id,
            'nama'  =>  $request->nama,
            'pekerjaan'  =>  $request->pekerjaan,
            'jenis_kelamin'  =>  $request->jenis_kelamin,
            'alamat'  =>  $request->alamat,
            'isLogin' => 1,
        ];

        Session::put($sessionData);

        // Perhatikan perubahan di baris berikut
        if (Session::get('isLogin', 0) == 1) {
            return redirect()->route('start_kuis');
        } else {
            return redirect()->route('buku_tamu_post')->with(['error' => 'Terjadi Error Silakan Coba Lagi!']);
        }
    }

    public function kuisPost(Request $request)
    {
        $time = \Carbon\Carbon::now();
        $waktu = $time->toDateTimeString();
        $pertanyaans = Pertanyaan::all();
        $skors = array();

        foreach ($pertanyaans as $key => $pertanyaan) {
            if (isset($_POST['jawaban' . $pertanyaan->id])) {
                if (isset($_POST['pertanyaan' . $pertanyaan->id])) {
                    $pertanyaan_id = $_POST['pertanyaan' . $pertanyaan->id];
                    $jawaban_id = $_POST['jawaban' . $pertanyaan->id];
                    $jawaban_benar = Jawaban::select('id')->where('pertanyaan_id', $pertanyaan_id)->where('is_true', 1)->first();
                    if ($jawaban_id == $jawaban_benar->id) {
                        $skor = 1;
                    } else {
                        $skor = 0;
                    }
                    $waktu_mulai = Session::get('time');
                    $waktu_selesai = $waktu;
                    $total = intval((strtotime($waktu_selesai) - strtotime($waktu_mulai)));
                    $skors[] = array(
                        'user_id'       =>  User::select('id')->orderBy('created_at', 'desc')->pluck('id')->first(),
                        'pertanyaan_id' =>  $pertanyaan_id,
                        'jawaban_id'    =>  $jawaban_id,
                        'skor'          =>  $skor,
                        'waktu_mulai'   =>  $waktu_mulai,
                        'waktu_selesai'   =>  $waktu_selesai,
                        'total_waktu'   =>  $total,
                    );
                } else {
                    $pertanyaan_id = 0;
                    $jawaban_id = 0;
                    $skor = 0;
                }
            }
        }
        // return $skors;
        JawabanUser::insert($skors);
        $jumlah_benar = array_sum(array_column($skors, 'skor'));
        // return $jumlah_benar;
        Nilai::create([
            'user_id'   => Session::get('id'),
            'nilai'     =>  round(($jumlah_benar / 15) * 100, 2),
            'total_waktu'   =>  $total,
        ]);
        $jumlah_soal = Setting::first();
        $tampil_nilai = round(($jumlah_benar / $jumlah_soal->banyak_soal) * 100, 2);
        if (($jumlah_benar / $jumlah_soal->banyak_soal) * 100 > 90) {
            $request->session()->flush();
            Session::put('nilai', $tampil_nilai);
            return redirect()->route('nilai');
        } else {
            $request->session()->flush();
            Session::put('nilai', $tampil_nilai);

            return redirect()->route('nilai');
        }
    }
}
