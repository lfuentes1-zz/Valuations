<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brokers', function($table)
		{
			$table->increments('id');
	        $table->string('broker_first_name', 250);
	        $table->string('broker_last_name', 250);
	        $table->string('broker_phone_number', 20);
			$table->string('broker_email', 200)->unique();
	        $table->string('broker_photo');
	        $table->string('broker_password');
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
		Schema::drop('brokers');
	}

}
