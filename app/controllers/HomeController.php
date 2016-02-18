<?php

class HomeController extends BaseController {

	// show the form for creating prospect
	public function create()
	{
		return View::make('index');
	}

	//store the prospect into the database
	public function store()
	{	

		$prospect = new Prospect();
		$fullAddress = Input::get('prospect-address');
		$addressPieces = explode(", ", $fullAddress);
		$prospect->prospect_address = $addressPieces[0];
		$prospect->prospect_city = $addressPieces[1];
		$prospect->prospect_state = $addressPieces[2];
		$prospect->prospect_address_lat = Input::get('latitude');
		$prospect->prospect_address_lng = Input::get('longitude');
		$prospect->prospect_zip = Input::get('zipcode');

		if (Input::has('prospect-unit-number'))
		{
	    	$prospect->prospect_apt_unit = Input::get('prospect-unit-number');
		}
		$prospect->agent_id  = Agent::findOrFail(1)->id;  //formula to determine agent
		$prospect->broker_id = Broker::findOrFail(1)->id;  

		if ($prospect->save())
		{   //true returns true or false
			return Redirect::action('HomeController@edit', array('prospect' => $prospect->id));
		}
		else
		{
			Session::flash('errorMessage', 'Unable to locate property!');
			return Redirect::back()->withInput();
		}
	}

	// show the form for editing a prospect
	public function edit($id)
	{
		$prospect = Prospect::find($id);
		return View::make('additional_information')->with(array('prospect' => $prospect));
	}

	//update the prospect into the databse
	public function update($id)
	{
		//should this be find or fail?
		$prospect = Prospect::find($id);
		if (Input::has('prospect-first-name'))
		{
	    	$prospect->prospect_first_name = Input::get('prospect-first-name');
		}
		if (Input::has('prospect-last-name'))
		{
	    	$prospect->prospect_last_name = Input::get('prospect-last-name');
		}
		if (Input::has('prospect-phone'))
		{
	    	$prospect->prospect_phone_number = Input::get('prospect-phone');
		}
		$prospect->prospect_email = Input::get('prospect-email');
		$prospect->prospect_house_bedrooms = Input::get('prospect-house-beds');
		$prospect->prospect_house_bathrooms = Input::get('prospect-house-baths');
		$prospect->prospect_house_sqft = Input::get('prospect-house-sqft');

		if ($prospect->save())
		{ 
			return View::make('thank_you');
		}
		else
		{
			Session::flash('errorMessage', 'An error has occurred!');
			return Redirect::back()->withInput();
		}
	}
}


// TODO:  Formula to determine which agent gets the leads or round robin
//should this be find or fail?
// $prospect = Prospect::find($id); in method update()