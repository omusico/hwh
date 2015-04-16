@extends ('landing.master')

@section('content')

	<!-- Header -->
	<header id="top" class="header">
		<div class="text-vertical-center pB10e">
			<h1>Health without Hype</h1>
			<h3>Coming May 1st, 2015!</h3>
			<br>
			{!! Form::open(['url' => '/join', 'class' => '', 'role' => 'form', 'id' => 'subscription_form']) !!}
			<input type="text" name="email" class="input-lg iw-lg" value="" placeholder="Enter Your Email"/>&nbsp;&nbsp;<button type="submit" class="btn btn-dark btn-lg">Get Invited!</button>
			{!! Form::close() !!}
		</div>
	</header>

@stop