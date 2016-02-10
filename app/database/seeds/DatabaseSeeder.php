<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::table('specialties')->delete();
		DB::table('prospects')->delete();
		DB::table('agents')->delete();
		DB::table('brokerages')->delete();
		DB::table('brokers')->delete();

		//the above ensures fresh data everytime
		$this->call('BrokerTableSeeder');
		$this->call('BrokerageTableSeeder');
		$this->call('AgentTableSeeder');
		// $this->call('ProspectTableSeeder');
		$this->call('SpecialtyTableSeeder');
	}
}