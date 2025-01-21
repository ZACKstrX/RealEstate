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
            $table->string('title');
            $table->text("description")->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->integer('surface')->nullable();
            $table->string('image')->nullable();
            $table->integer('prix');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('type_bien_id')->nullable()->constrained('type_biens');
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('etat_id')->nullable()->constrained('etats');
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
