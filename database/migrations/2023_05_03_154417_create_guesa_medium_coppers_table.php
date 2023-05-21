<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guesa_medium_coppers', function (Blueprint $table) {
            $table->id();
            $table->string('principal_par');
            $table->string('principal_sec');
            $table->string('strip');
            $table->string('divice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guesa_medium_coppers');
    }
};
