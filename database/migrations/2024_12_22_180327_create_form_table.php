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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donasi_id')->constrained('donasi');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->text('alamat');
            $table->decimal('nominal', 10, 2);
            $table->string('ktp')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['pending', 'sukses', 'gagal'])->default('pending');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
