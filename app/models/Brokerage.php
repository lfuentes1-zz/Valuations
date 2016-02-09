<?php

class Brokerage extends Eloquent 
{

	protected $table = 'brokerages';

	public function broker()
    {
        return $this->hasOne('Broker');
    }

	public function agents()
	{
	    return $this->hasMany('Agent');
	}
}