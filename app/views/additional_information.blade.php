@extends('layouts.master')

@section('head')
	@parent
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU"></script>
	<script src="/js/additional_information.js"></script>
@stop

@section('content')

	{{ Form::open(array('action' => array('HomeController@update', $prospect->id), 'method' => 'PUT', 'id' => 'create-form')) }}	

	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3">
			<div class="jumbotron">
				<div class="hidden">
					{{ Form::label('latitude', 'Lat') }}
		        	{{ Form::text('latitude', $prospect->prospect_address_lat) }}
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="jumbotron-heading text-center">
							<h3>{{{"Please complete to receive your FREE Home Market Report"}}}
							{{ Form::label('prospect-first-name', ' ') }}
		        			{{ Form::text('prospect-first-name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
		        		
		        			{{ Form::label('prospect-last-name', ' ') }}
		        			{{ Form::text('prospect-last-name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
		        		
		        			{{ Form::label('prospect-email', ' ') }}
		        			{{ Form::text('prospect-email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) }}
		        		
		        			{{ Form::label('prospect-phone', ' ') }}
		        			{{ Form::text('prospect-phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) }}
							
							<h2>{{{"Property Details"}}}
							<h4>{{{$prospect->prospect_address . ', ' .	$prospect->prospect_city . ', ' . $prospect->prospect_state . ' ' . $prospect->prospect_zip}}}</h4>

							{{ Form::label('prospect-house-beds', ' ') }}
					        {{ Form::select('prospect-house-beds', [null=>'Number of Bedrooms'] + array(
					        	'1' => '1 Bedroom',
					        	'2' => '2 Bedrooms',
					        	'3' => '3 Bedrooms',
					        	'4' => '4 Bedrooms',
					        	'5' => '5 Bedrooms',
					        	'6' => '6+ Bedrooms'
					        ), null, array('class' => 'form-control')) }}

							{{ Form::label('prospect-house-baths', ' ') }}
					        {{ Form::select('prospect-house-baths', [null=>'Number of Baths'] + array(
					        	'1' => '1 Bathroom',
					        	'2' => '1.5 Bathrooms',
					        	'3' => '2 Bathrooms',
					        	'4' => '2.5 Bathrooms',
					        	'5' => '3 Bathrooms',
					        	'6' => '3.5 Bathrooms',
					        	'7' => '4 Bathrooms',
					        	'8' => '4.5 Bathrooms',
					        	'9' => '5+ Bathrooms'
					        ), null, array('class' => 'form-control')) }}

					        {{ Form::label('prospect-house-sqft', ' ') }}
		        			{{ Form::text('prospect-house-sqft', null, ['class' => 'form-control', 'placeholder' => 'Square Feet']) }}
						</div>	
					</div>
					<div class="col-md-7">
						<div class="img-responsive" id="map-canvas"></div>
					</div>
				</div>
				<div class="hidden">
					{{ Form::label('longitude', 'Lng') }}
		       		{{ Form::text('longitude', $prospect->prospect_address_lng) }}
			    </div>
			    <div class="hidden">
					{{ Form::label('prospect-address', 'Address') }}
		       		{{ Form::text('prospect-address', $prospect->prospect_address . ', ' . $prospect->prospect_city . ', ' . 
		       										  $prospect->prospect_state   . ', ' . $prospect->prospect_zip) }}
			    </div>
	   			{{ Form::submit('Submit', ['class' => 'btn btn-default btn-lg center-block']) }}
			</div>
		</div>
	</div>


	{{ Form::close() }}	

@stop


{{--

TODO:  need to fix the layout of this page
TODO:  need the two forms
--}}

