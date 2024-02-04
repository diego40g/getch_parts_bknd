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
        Schema::create('car_parts', function (Blueprint $table) {
            $table->id();
            $table->string('code_part', 10)->uniqued();
            $table->unsignedBigInteger('zone_id');
            $table->string('name',256);
            $table->text('description');
            $table->boolean('status');
            $table->binary('image')->nullable();
            $table->timestamps();

            $table->foreign('zone_id')->references('id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_parts');
    }
};
