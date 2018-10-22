<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identity_number');
            $table->string('employee_name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('picture');
            $table->integer('position_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
