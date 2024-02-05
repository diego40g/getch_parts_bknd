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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('code_part', 10)->unique();
            $table->unsignedBigInteger('subcategory_id');
            // $table->unsignedBigInteger('car_id');
            $table->string('bibliographic_name',256);
            $table->string('common_name_1',256)->nullable();
            $table->string('common_name_2',256)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            // $table->foreign('car_id')->references('id')->on('cars');
        });
        DB::statement("ALTER TABLE parts ADD image MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
