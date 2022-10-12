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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admin');
            $table->foreignId('costumer_id')->constrained('costumer');
            $table->foreignId('mobil_id')->constrained('mobil');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('total_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
