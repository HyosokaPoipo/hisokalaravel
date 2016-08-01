@extends('masterview.masterpage')

@section('title') Edit Page
@stop


@section('body') This is Body of Edit Page
	{!!Form::open(['route' => 'isitabel.store'])!!}
		{!!Form::label('name','Name')!!}
		{!!Form::text('name', null, ['placeholder' => "Enter your name"])!!} <br/>
		{!!Form::label('posLabel','Position')!!}
		{!!Form::text('position')!!} <br/>
		{!!Form::label('secLabel','Secret Jutsu')!!}
		{!!Form::text('secret_jutsu')!!} <br/>
		{!!Form::label('partLabel','Partners')!!}
		{!!Form::text('parner')!!} <br/> <br/>
		{!!Form::submit('Add to DB')!!}
		

 	{!!Form::close()!!}
@stop