<!--@extends('layout')
@section('content')-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
</head>
<body>
	<h1>Data</h1>
	<p>Please type in the following form:</p>
	
	{!! Form::open(array('url' => 'contact')) !!}
	{!! Form::label('First name') !!}
	{!! Form::text('firstName','') !!}
	<br />
	{!! Form::label('Last name') !!}
	{!! Form::text('lastName','') !!}
	<br />
	{!! Form::label('DOB') !!}
	{!! Form::text('dob','') !!}
	<br />
	{!! Form::label('Phone') !!}
	{!! Form::text('phone','') !!}
	<br />
	{!! Form::submit() !!}
	{!! Form::close() !!}
	@stop
</body>
</html>