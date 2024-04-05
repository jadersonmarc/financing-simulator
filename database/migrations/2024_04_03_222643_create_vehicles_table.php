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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('photo'); 
            $table->string('city'); 
            $table->string('brand'); 
            $table->string('model'); 
            $table->text('description'); 
            $table->year('year'); 
            $table->integer('mileage'); 
            $table->string('transmission_type'); 
            $table->string('store_phone'); 
            $table->decimal('price', 8, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
