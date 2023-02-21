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
        Schema::create('siswas', function (Blueprint $table) {
					$table->id();
					$table->string('nama')->nullable();
					$table->integer('no_absen')->nullable();
					$table->string('jabatan')->nullable();
					$table->string('kelas')->nullable();
					$table->string('gambar')->nullable();
					$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
