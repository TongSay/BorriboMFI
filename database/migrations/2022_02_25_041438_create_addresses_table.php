<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_apply_job')->nullable();
            $table->integer('id_apply_loan')->nullable();
            $table->integer('id_province');
            $table->integer('province');
            $table->integer('id_district');
            $table->integer('district');
            $table->integer('id_commune');
            $table->integer('commune');
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
        Schema::dropIfExists('addresses');
    }
}
