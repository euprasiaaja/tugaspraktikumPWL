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
        Schema::create('ktd', function (Blueprint $table) {
            $table->id('id_ktd');
            $table->string('ID_dosen', 10)->unique();
            $table->string('nomor_identitas', 12)->unique();

            $table->foreign('nip')->references('nip')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktd');
}
};
