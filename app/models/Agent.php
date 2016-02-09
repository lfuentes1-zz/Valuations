<?php

class Agent extends Eloquent 
{

	protected $table = 'agents';

	public function brokerage()
	{
		return $this->belongsTo('Brokerage');
	}

	public function broker()
	{
		return $this->belongsTo('Broker');
	}

	public function prospects()
	{
	    return $this->hasMany('Prospect');
	}

	public function specialties()
	{
		return $this->belongsToMany('Specialty');
	}
	
}