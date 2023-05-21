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
        Schema::create('guesa_generated_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('guesa_users');
            $table->foreignId('customer_id')->constrained('guesa_customers');
            $table->foreignId('pdf_id')->constrained('guesa_orders_p_d_f_s');
            $table->foreignId('installationData_id')->constrained('guesa_installation_data');
            $table->foreignId('order_statuses_id')->constrained('guesa_order_statuses');
            $table->foreignId('photo_album_id')->constrained('guesa_photo_albums');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guesa_generated_orders');
    }
};
