<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokeragesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brokerages', function($table)
		{
            $table->increments('id');
            $table->string('brokerage_name', 250);
			$table->string('brokerage_adress', 250);
			$table->string('brokerage_unit_suite', 10);
            $table->string('brokerage_city', 150);
            $table->string('brokerage_state', 20);
            $table->string('brokerage_zip', 10);
            $table->string('brokerage_phone_number', 20);
			$table->string('brokerage_email', 200)->unique();
            $table->string('brokerage_logo');
            $table->integer('broker_id')->unsigned();
			$table->foreign('broker_id')->references('id')->on('brokers');
            $table->timestamps();

            // $table->string('slug')->nullable();
            // $table->rememberToken();
            // $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('brokerages');
	}

}
