<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('full_name');
            $table->string('name')->unique();
	        $table->string('password');
	        $table->string('email')->unique();
	        $table->string('sdt');
	        $table->dateTime('start_date');
            $table->integer('user_employee_type_id');
            $table->integer('user_rank_id');
            $table->integer('user_status_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
