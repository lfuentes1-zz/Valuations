@extends('layouts.master')

@section('content')

{{ Form::model(array('action' => 'HomeController@thankYou', 'method' => 'PUT')) }}


	  		{{ Form::model($group, array('action' => array('GroupsController@update', $group->id), 'method' => 'PUT')) }}


<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
		<div class="jumbotron-heading text-center">
			<h2>Additional Information</h2>
		</div>
		<div class="jumbotron-subheading text-center">
			<h3>Get your <span class="jumbotron-special-txt">FREE</span> Home Market Analysis Report</h3>
		</div>
		<form class="form-inline">
			<div class="form-group">
		    	<label for="prospect-address"></label>
		    	<input type="text" class="form-control" id="prospect-address" placeholder="Address" autocomplete="on" size="55">
		  	</div>
		  	<div class="form-group">
		    	<label for="prospect-unit-number"></label>
		    	<input type="text" class="form-control" id="prospect-unit-number" placeholder="Unit #">
		  	</div>
		  	<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>

{{ Form::close() }}

@stop




{{-- 

TODO:  Might need something like this:  {{ Form::model($group, array('action' => array('GroupsController@update', $group->id), 'method' => 'PUT')) }} 

--}}
