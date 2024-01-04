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
        Schema::create('ucapan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kehadiran', ['Hadir', 'Tidak Hadir', 'Belum Pasti']);
            $table->text('ucapan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ucapan');
    }
};
