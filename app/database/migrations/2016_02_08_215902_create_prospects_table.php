<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospects', function($table)
		{
			$table->increments('id');
	        $table->string('prospect_first_name', 250)->nullable();
	        $table->string('prospect_last_name', 250)->nullable();
	        $table->string('prospect_address', 250);
	        $table->string('prospect_apt_unit', 10)->nullable();
	        $table->string('prospect_city', 150);
            $table->string('prospect_state', 20);
            $table->string('prospect_zip', 10);
            $table->float('prospect_address_lat', 12, 6);
            $table->float('prospect_address_lng', 12, 6);
	        $table->string('prospect_phone_number', 20)->nullable();
			$table->string('prospect_email', 200)->unique();
			$table->integer('agent_id')->unsigned();
			$table->foreign('agent_id')->references('id')->on('agents');
			$table->integer('broker_id')->unsigned();
			$table->foreign('broker_id')->references('id')->on('brokers');
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
		Schema::drop('prospects');
	}

}
