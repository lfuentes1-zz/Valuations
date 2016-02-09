<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agents', function($table)
		{
			$table->increments('id');
	        $table->string('agent_first_name', 250);
	        $table->string('agent_last_name', 250);
	        $table->string('agent_phone_number', 20);
			$table->string('agent_email', 200)->unique();
	        $table->string('agent_photo');
	        $table->string('agent_password');
	        $table->integer('agent_listing_leads');
	        $table->integer('agent_listing_appointments');
	        $table->integer('agent_listings_taken');
	        $table->integer('agent_listings_sold');
	        $table->float('agent_lead_to_sold_rate', 6, 2);
	        $table->decimal('agent_dollar_volume', 10, 2);
	        $table->integer('brokerage_id')->unsigned();
			$table->foreign('brokerage_id')->references('id')->on('brokerages');
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
		Schema::drop('agents');
	}

}
