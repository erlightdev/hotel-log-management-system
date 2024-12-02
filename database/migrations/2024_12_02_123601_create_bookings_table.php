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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('room_type', ["single","double","suite","family","deluxe"]);
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('total_guests');
            $table->decimal('total_price', 10, 2);
            $table->enum('booking_status', ["pending","confirmed","checked_in","checked_out","cancelled"])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
