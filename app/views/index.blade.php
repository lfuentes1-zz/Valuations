@extends('layouts.master')

@section('head')
	@parent
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU&amp;libraries=places"
		type="text/javascript"></script>
	<script src="/js/index.js"></script>
@stop

@section('content')

	{{ Form::open(array('action' => 'HomeController@store', 'method' => 'POST', 'id' => 'create-form')) }}	

	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
				<div class="hidden">
					{{ Form::label('latitude', 'Lat') }}
		        	{{ Form::text('latitude', null) }}
		        </div>
		        <div class="jumbotron-heading text-center">
				<h2>What is your San Antonio home worth?</h2>
			</div>
			<div class="jumbotron-subheading text-center">
				<h3>Get your <span class="jumbotron-special-txt">FREE</span> Home Market Analysis Report</h3>
			</div>
			<form class="form-inline">
				<div class="form-group">
			    	{{ Form::label('prospect-address', ' ') }}
			        {{ Form::text('prospect-address', null, ['class' => 'form-control', 'placeholder' => 'Address', 'autocomplete' => 'on']) }}
			  	</div>
			  	<div class="form-group">
			  		{{ Form::label('prospect-unit-number', ' ') }}
			        {{ Form::text('prospect-unit-number', null, ['class' => 'form-control', 'placeholder' => 'Unit Number']) }}
			  	</div>
			  	{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
			  	<div class="hidden">
					{{ Form::label('longitude', 'Lng') }}
		       		{{ Form::text('longitude', null) }}
		        </div>
		        <div class="hidden">
					{{ Form::label('zipcode', 'Zip') }}
		       		{{ Form::text('zipcode', null) }}
		        </div>
			</form>
		</div>
	</div>

	{{ Form::close() }}	

@stop

{{--

	TODO:  Notice that if the user types in an address without clicking o submit, the lat and long cannot be figured out.  Does this have anything to do with blur

--}}