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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('code_subcategory', 10)->unique();
            $table->unsignedBigInteger('car_part_id');
            $table->string('name',256);
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('car_part_id')->references('id')->on('car_parts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
