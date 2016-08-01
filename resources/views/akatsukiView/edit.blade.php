@extends('masterview.masterpage')

@section('title') Edit Page
@stop


@section('body') This is Body of Edit Page
	  {!!Form::model($input,[
		'method' => 'patch',
		'route' => ['isitabel.update',$input->id]])!!}
		{!!Form::label('name','Name')!!}
		{!!Form::text('name', $input->name, ['placeholder' => "Enter your name"])!!} <br/>
		{!!Form::label('posLabel','Position')!!}
		{!!Form::text('position',$input->position,['placeholder' => "Enter Position"])!!} <br/>
		{!!Form::label('secLabel','Secret Jutsu')!!}
		{!!Form::text('secret_jutsu',$input->secret_jutsu,['placeholder' => "Enter secret jutsu"])!!} <br/>
		{!!Form::label('partLabel','Partners')!!}
		{!!Form::text('parner', $input->parner,['placeholder' => "Enter the partner..."])!!} <br/> <br/>
		{!!Form::submit('Edit')!!}
		

 	{!!Form::close()!!}
@stop