<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->on('doctors')->references('id')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_categories');
    }
}