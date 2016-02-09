<?php

class Specialty extends Eloquent 
{

	protected $table = 'specialties';

	public function agents()
	{
		return $this->belongsToMany('Agent');
	}
}