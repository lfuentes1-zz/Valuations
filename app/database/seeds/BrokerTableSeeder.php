<?php

class BrokerTableSeeder extends Seeder 
{	
	public function run()
	{
		$broker = new Broker();
		$broker->broker_first_name	= 'Daryl';
		$broker->broker_last_name	= 'Zipp';
		$broker->broker_phone_number= '210.844.8683';
		$broker->broker_email		= 'dzipp@satx.rr.com';
		// $broker->broker_photo		='daryl.jpg'; //can be nullable
		$broker->broker_password	= $_ENV['BROKER_PASS'];
		$broker->save();
	}	
}