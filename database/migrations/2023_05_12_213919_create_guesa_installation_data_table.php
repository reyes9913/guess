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
        Schema::create('guesa_installation_data', function (Blueprint $table) {
            $table->id();
            $table->string('order-number');
            $table->string('footage-type');
            $table->string('phone');
            $table->string('os-type');
            $table->string('os-number');
            $table->string('pisaplex');
            $table->string('district');
            $table->string('port');
            $table->string('terminal');
            $table->string('contracted-speed');
            $table->string('delivered-speed');
            $table->foreignId('medium_fibers_id')->constrained('guesa_medium_fibers');
            $table->foreignId('medium_coppers_id')->constrained('guesa_medium_coppers');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guesa_installation_data');
    }
};
