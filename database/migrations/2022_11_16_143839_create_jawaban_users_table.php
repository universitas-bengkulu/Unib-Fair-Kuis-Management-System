<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('jawaban_id');
            $table->integer('skor');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
            $table->integer('total_waktu');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaans');
            $table->foreign('jawaban_id')->references('id')->on('jawabans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_users');
    }
};
