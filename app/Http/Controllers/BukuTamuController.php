<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\JawabanUser;
use App\Models\Nilai;
use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BukuTamuController extends Controller
{
    public function post(Request $request){
        $user = User::create([
            'nama'  =>  $request->nama,
            'pekerjaan'  =>  $request->pekerjaan,
            'jenis_kelamin'  =>  $request->jenis_kelamin,
            'alamat'  =>  $request->alamat,
        ]);

        return redirect()->route('menu_lptik_unibfair');
    }

    public function kuisPost(Request $request){
        $time = \Carbon\Carbon::now();
        $waktu = $time->toDateTimeString();
        $pertanyaans = Pertanyaan::all();
        $skors = array();

        foreach ($pertanyaans as $key => $pertanyaan) {
            if (isset($_POST['jawaban'.$pertanyaan->id])) {
                if (isset($_POST['pertanyaan'.$pertanyaan->id])) {
                    $pertanyaan_id = $_POST['pertanyaan'.$pertanyaan->id];
                    $jawaban_id = $_POST['jawaban'.$pertanyaan->id];
                    $jawaban_benar = Jawaban::select('id')->where('pertanyaan_id',$pertanyaan_id)->where('is_true',1)->first();
                    if ($jawaban_id == $jawaban_benar->id) {
                        $skor = 1;
                    }else {
                        $skor = 0;
                    }
                    $waktu_mulai = Session::get('time');
                    $waktu_selesai = $waktu;
                    $total = intval((strtotime($waktu_selesai)-strtotime($waktu_mulai)));
                    $skors[] = array(
                        'user_id'       =>  User::select('id')->orderBy('created_at','desc')->pluck('id')->first(),
                        'pertanyaan_id' =>  $pertanyaan_id,
                        'jawaban_id'    =>  $jawaban_id,
                        'skor'          =>  $skor,
                        'waktu_mulai'   =>  $waktu_mulai,
                        'waktu_selesai'   =>  $waktu_selesai,
                        'total_waktu'   =>  $total,
                    );
                }else {
                    $pertanyaan_id = 0;
                    $jawaban_id = 0;
                    $skor = 0;
                }
            }

            

        }
        // return $skors;
        JawabanUser::insert($skors);
        $jumlah_benar = array_sum(array_column($skors,'skor'));
        // return $jumlah_benar;
        Nilai::create([
            'user_id'   => User::select('id')->orderBy('created_at','desc')->pluck('id')->first(),
            'nilai'     =>  ($jumlah_benar/15)*100,
            'total_waktu'   =>  $total,
        ]);
        return redirect()->back()->with(['success'  =>  'Jawaban sudah tersimpan']);
    }
}
