<?php

class HomeController extends BaseController {

	// show the form for creating prospect
	public function homePage()
	{
		return View::make('index');
	}

	public function additionalInformation()
	{

		$prospect = new Prospect();
		$prospect->prospect_adress = ;
	    $prospect->prospect_apt_unit = ;
        $prospect->prospect_city = ;
        $prospect->prospect_state = ;

		if ($prospect->save()) {  //true returns true or false
			$prospect->agent_id  = Agent::findOrFail(1)->id;  //formula to determine agent
			$prospect->broker_id = Broker::findOrFail(1)->id;  //formula to determine agent
			return Redirect::route('additional_information', $prospect->id);
		} else {
			Session::flash('errorMessage', 'Unable to locate property!');
			return Redirect::back()->withInput();
		}
		// return View::make('additional_information');
	}

	public function thankYou()
	{
		//update the prospect into the database
		echo ('updated');
		return View::make('thank_you');
	}

	
}


// TODO:  Formula to determine which agent gets the leads or round robin