<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();

            // Relasi ke penghuni
            $table->unsignedBigInteger('penghuni_id');

            $table->string('kamar');
            $table->date('tgl_booking');
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])
                  ->default('pending');

            $table->text('catatan')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('penghuni_id')
                  ->references('id')
                  ->on('penghuni')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
