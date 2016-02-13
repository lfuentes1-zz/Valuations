@extends('layouts.master')

@section('head')
	@parent
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU"></script>
	<script src="/js/additional_information.js"></script>
@stop

@section('content')

	{{ Form::open(array('action' => 'HomeController@update', 'method' => 'PUT', 'id' => 'create-form')) }}	

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
							{{ Form::label('latitude', 'Lat') }}
		        			{{ Form::text('latitude', $prospect->prospect_address_lat) }}
		        			{{ Form::label('latitude', 'Lat') }}
		        			{{ Form::text('latitude', $prospect->prospect_address_lat) }}

							<h2>{{{"Property Details"}}}
							<h4>{{{$prospect->prospect_address}}}</h4>
								need a form here
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
			</div>
		</div>
	</div>

	{{ Form::close() }}	

@stop


{{--

TODO:  need to fix the layout of this page
TODO:  need the two forms


--}}

