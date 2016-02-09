<?php

class Broker extends Eloquent 
{

	protected $table = 'brokers';

	// public function brokerage()
 //    {
 //        return $this->belongsTo('Brokerage');
 //    }

	public function agents()
	{
	    return $this->hasMany('Agent');
	}
}