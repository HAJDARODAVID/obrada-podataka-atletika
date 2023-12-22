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
        Schema::create('discipline_for_years', function (Blueprint $table) {
            $table->unsignedBigInteger('discipline_id')->unsigned();
            $table->unsignedBigInteger('year_id')->unsigned();

            $table->foreign('discipline_id')->references('id')->on('discipline_category');
            $table->foreign('year_id')->references('id')->on('year_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discipline_for_years');
    }
};
