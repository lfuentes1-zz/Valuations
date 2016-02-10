<?php

class HomeController extends BaseController {

	// show the form for creating prospect
	public function homePage()
	{
		return View::make('index');
	}

	public function additionalInformation(/*will need a id parameter here*/)
	{
		//store the prospect into the database
		echo ('stored');
		return View::make('additional_information');
	}

	public function thankYou()
	{
		return View::make('thank_you');
	}
}
