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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id('ID_dosen');
            $table->string('Nama', 100);
            $table->string('NIP', 58)->unique();
            $table->string('Jabatan', 100);
            $table->string('Matakuliah', 100);
            $table->string('email', 50)->unique();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
}
};