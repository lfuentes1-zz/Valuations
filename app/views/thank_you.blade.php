@extends('layouts.master')

@section('content')


<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
		<div class="jumbotron-heading text-center">
			<h2>Your Home Value Results</h2>
			<h4>Your customized home value results will be sent to your email within an hour.</h4>
			<h4>If I can assist you in any way, please contact me.</h4>
			<p>
			<div class="row">
				<div class="col-md-8">
					<img src="{{{$prospect->agent->agent_photo}}}" alt="Agent Photo" class="img-circle agent-image">
				</div>
				<div class="col-md-4">
					<h2>{{{$prospect->agent->agent_first_name . ' ' . $prospect->agent->agent_last_name}}}</h2>
					<h4>{{{$prospect->agent->agent_email}}}</h4>
					<h4>{{{$prospect->agent->agent_phone_number}}}</h4>
				</div>
			</div>
			<div class="row">
				<a href="{{{$prospect->agent->agent_facebook}}}" target="_blank">
					<img src="/img/facebook_logo.png" alt="Agent Facebook" width="42" height="42" border="0">
				</a>
			</div>
		</div>
	</div>
</div>


@stop


{{--

TODO:  Show agent photos be in gitignore

--}}