<?php

class Prospect extends Eloquent 
{

	protected $table = 'prospects';

	public function agent()
	{
		return $this->belongsTo('Agent');
	}

	public function broker()
	{
		return $this->belongsTo('Broker');
	}
}