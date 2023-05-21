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
        Schema::create('guesa_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('zones_id')->constrained('guesa_zones');
            $table->enum('role', ['super_admin', 'admin', 'technical']);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guesa_users');
    }
};
