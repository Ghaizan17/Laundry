<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->enum('jenis_layanan', ['laundry_kiloan', 'laundry_satuan', 'laundry_express', 'laundry_sepatu', 'dry_cleaning']);
            $table->string('berat')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('no_hp');
            $table->text('catatan')->nullable();
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundries');
    }
};
