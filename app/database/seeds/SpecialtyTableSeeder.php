<?php

class SpecialtyTableSeeder extends Seeder 
{	
	public function run()
	{
		$specialty = new Specialty();
		$specialty->specialty_name	= 'Sellers';
		$specialty->save();

		$specialty2 = new Specialty();
		$specialty2->specialty_name	= 'Probate Sellers';
		$specialty2->save();

		$specialty3 = new Specialty();
		$specialty3->specialty_name	= 'Senior Sellers';
		$specialty3->save();
	}	
}