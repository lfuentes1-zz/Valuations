<?php

class HomeController extends BaseController {

	// show the form for creating prospect
	public function homePage()
	{
		return View::make('index');
	}

	//store the prospect into the database
	public function store()
	{	

		$prospect = new Prospect();
		$fullAddress = Input::get('prospect-address');
		$addressPieces = explode(", ", $fullAddress);
		$prospect->prospect_adress = $addressPieces[0];
		$prospect->prospect_city = $addressPieces[1];
		$prospect->prospect_state = $addressPieces[2];

		if (Input::has('prospect-unit-number'))
		{
	    	$prospect->prospect_apt_unit = Input::get('prospect-unit-number');
		}
		$prospect->agent_id  = Agent::findOrFail(1)->id;  //formula to determine agent
		$prospect->broker_id = Broker::findOrFail(1)->id;  

		if ($prospect->save())
		{  //true returns true or false
			return Redirect::route('additional_information', $prospect->id);
		}
		else
		{
			Session::flash('errorMessage', 'Unable to locate property!');
			return Redirect::back()->withInput();
		}
	}

	public function edit($id)
	{
		return View::make('additional_information')->with(array('id' => $id, 'address' => $fullAddress));
	}

	public function thankYou()
	{
		//update the prospect into the database
		return View::make('thank_you');
	}

	
}


// TODO:  Formula to determine which agent gets the leads or round robin