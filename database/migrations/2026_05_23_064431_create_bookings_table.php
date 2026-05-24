<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')->constrained();

            $table->foreignId('service_id')->constrained();

            $table->foreignId('barber_id')->constrained();

            $table->date('tanggal_booking');

            $table->time('jam_booking');

            $table->enum('status', [
                'pending',
                'diterima',
                'selesai',
                'ditolak'
            ])->default('pending');

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};