<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\JawabanUser;
use App\Models\Nilai;
use Carbon\Carbon;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('settings', [
            'setting' => $setting,
        ]);
    }

    public function post(Request $request)
    {

        $rules = [
            'soal' => 'required',
            'waktu' => 'required',
            'password' => 'required',
        ];

        $messages = [
            'required' => ':attribute harus diisi.',
        ];

        $attributes = [
            'soal' => 'soal',
            'waktu' => 'waktu',
            'password' => 'password',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()->route('setting_kuis')->withErrors($validator)->withInput();
        }
        $today = Carbon::now();
        $dayMonth  = $today->format('dm');
        if ($request->password === $dayMonth) {

             if($request->reset == 1){
                Nilai::truncate();
                JawabanUser::truncate();
             }

             Setting::query()
            ->update([
                'banyak_soal' => $request->soal,
                'lama_pengerjaan_menit' => $request->waktu,
            ]);
            return response()->json("Update Berhasil");


        }else{
            return response()->json("Update Gagal");
        }





    }
}
