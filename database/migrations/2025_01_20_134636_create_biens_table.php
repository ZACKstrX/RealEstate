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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->integer('surface');
            $table->integer('image');
            $table->integer('prix');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('type_bien_id')->constrained('type_biens');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('etat_id')->constrained('etats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
