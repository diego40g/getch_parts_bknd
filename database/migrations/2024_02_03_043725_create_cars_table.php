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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('code_car', 10)->unique();
            $table->string('brand');
            $table->string('model');
            $table->year('year');
            $table->string('traction');
            $table->string('engineType');
            $table->string('kind');
            // $table->string('color');
            // $table->string('plate',8);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE cars ADD image MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
