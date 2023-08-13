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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');  
            $table->enum('jenis', ['1', '2']);
            $table->enum('bidang',['0','1','2','3','4','5']);
            $table->text('isi');
            $table->string('image')->nullable();
            $table->enum('status',['diterima', 'ditolak'])->nullable();
            $table->text('tanggapan')->nullable();
            $table->timestamps();

        });
        // $dataPengaduan = DB::table('laporan')
        // ->select('bidang', DB::raw('count(*) as jumlah_pengaduan'))
        // ->groupBy('bidang')
        // ->get();

        // foreach ($dataPengaduan as $item) {
        //     echo "Bidang: " . $item->bidang . " - Jumlah Pengaduan: " . $item->jumlah_pengaduan . "<br>";
        // }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
};
