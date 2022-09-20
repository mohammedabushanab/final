<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->on('doctors')->references('id')->onDelete('cascade');
            $table->foreignId('supplier_id');
            $table->foreign('supplier_id')->on('suppliers')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('medicine_suppliers');
    }
}