<?php

class Broker extends Eloquent 
{

	protected $table = 'brokers';

	public function brokerages()
    {
        return $this->hasMany('Brokerage');
    }

	public function agents()
	{
	    return $this->hasMany('Agent');
	}

	public function prospects()
	{
		return $this->hasMany('Prospects');
	}
}