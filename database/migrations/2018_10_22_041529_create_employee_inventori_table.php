<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInventoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_inventori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('inventori_id')->unsigned();
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('employee_inventori', function (Blueprint $table) {
            $table->foreign('employee_id')->references('id')->on('employees');
        });

        Schema::table('employee_inventori', function (Blueprint $table) {
            $table->foreign('inventori_id')->references('id')->on('inventoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_inventori');
    }
}
