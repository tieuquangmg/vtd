<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence', function (Blueprint $table) {
        	$table->increments('id');
	        $table->integer('user_id');
	        $table->date('start_date');
	        $table->integer('days');
	        $table->integer('user_approval_id');
	        $table->string('absence_status_id');
	        $table->text('user_note');
	        $table->text('approval_note');
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
        Schema::dropIfExists('absence');
    }
}
