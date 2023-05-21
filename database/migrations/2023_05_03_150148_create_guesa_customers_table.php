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
        Schema::create('guesa_customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number_one');
            $table->string('number_two');
            $table->string('address');
            $table->string('between_streets');
            $table->string('building');
            $table->string('depto');
            $table->string('city');
            $table->string('municipality');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guesa_customers');
    }
};
