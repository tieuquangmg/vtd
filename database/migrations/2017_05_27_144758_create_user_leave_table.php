<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_leave', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('absence_type_id');
            $table->integer('year_id');
            $table->integer('total_leave');
            $table->integer('taken_leave');
            $table->integer('balance_leave');
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
        Schema::dropIfExists('user_leave');
    }
}
