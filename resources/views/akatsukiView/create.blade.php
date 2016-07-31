@extends('masterview.masterpage')

@section('title') Create Page
@stop


@section('body') This is Body of Create Page
	{!!Form::open(['route' => 'isitabel.store'])!!}
		{!!Form::label('name','Name')!!}
		{!!Form::text('Name', null, ['placeholder' => "Enter your name"])!!} <br/>
		{!!Form::label('posLabel','Position')!!}
		{!!Form::text('Position')!!} <br/>
		{!!Form::label('secLabel','Secret Jutsu')!!}
		{!!Form::text('Secret_Jutsu')!!} <br/>
		{!!Form::label('partLabel','Partners')!!}
		{!!Form::text('Parner')!!} <br/> <br/>
		{!!Form::submit('Add to DB')!!}
		

 	{!!Form::close()!!}
@stop