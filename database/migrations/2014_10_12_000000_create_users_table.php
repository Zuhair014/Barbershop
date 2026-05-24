<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {

            $table->id();

            $table->string('nama_layanan');

            $table->integer('harga');

            $table->integer('durasi');

            $table->text('deskripsi');

            $table->string('gambar')->nullable();

            $table->string('role')->default('customer');

            $table->string('phone')->nullable();

            $table->text('address')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};