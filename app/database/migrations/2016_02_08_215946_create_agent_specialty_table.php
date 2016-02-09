<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentSpecialtyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agent_specialty', function(Blueprint $table)
		{			
			$table->integer('agent_id')->unsigned();
			$table->foreign('agent_id')->references('id')->on('agents');

			$table->integer('specialty_id')->unsigned();
			$table->foreign('specialty_id')->references('id')->on('specialties');
			
			$table->primary(array('agent_id', 'specialty_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agent_specialty');
	}

}
