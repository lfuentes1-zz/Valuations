@extends('layouts.master')

@section('head')
	@parent
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU"></script>
	<script src="/js/additional_information.js"></script>
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
			<div class="">
				{{ Form::label('latitude', 'Lat') }}
	        	{{ Form::text('latitude', $prospect->prospect_address_lat) }}
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="jumbotron-heading text-center" id="prospect-address">
						<h3>{{{"Please complete to receive your FREE Home Market Report"}}}
							need a form here
						<h2>{{{"Property Details"}}}
						<h4>{{{$prospect->prospect_address}}}</h4>
							need a form here
					</div>	
				</div>
				<div class="col-md-8">
					<div class="img-responsive" id="map-canvas"></div>
				</div>
			</div>
			<div class="">
				{{ Form::label('longitude', 'Lng') }}
	       		{{ Form::text('longitude', $prospect->prospect_address_lng) }}
		    </div>
		</div>
	</div>
@stop


{{--

TODO:  need to fix the layout of this page
TODO:  need the two forms

--}}

