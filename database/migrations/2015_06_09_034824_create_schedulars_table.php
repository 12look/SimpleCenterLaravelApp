<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedularsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedulars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('worker_id');
			$table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
			$table->timestamp('start');
			$table->timestamp('end');
			$table->integer('group_num');
			$table->enum('day_of_week', ['1', '2', '3', '4', '5', '6', '7']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedulars');
	}

}
