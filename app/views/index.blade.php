@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => 'HomeController@store', 'method' => 'POST', 'id' => 'create-form')) }}	

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
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
		</form>
	</div>
</div>

{{ Form::close() }}	

@stop


