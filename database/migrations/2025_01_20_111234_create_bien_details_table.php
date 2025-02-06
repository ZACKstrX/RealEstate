<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bien_details', function (Blueprint $table) {
            $table->id();
            $table->integer('rooms')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('balconies')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bien_details');
    }
};
