@extends('masterview.masterpage')

@section('title') Show Page
@stop


@section('body') This is Body of Show Page <br/>
	{!!Form::open([
		'method' => 'delete',
		'route'=>['isitabel.destroy', $showdata->id]
		])!!}
        Name : {{$showdata->name}} <br/>
		Position : {{$showdata->position}} <br/>
		Secret Jutsu : {{$showdata->secret_jutsu}} <br/>
		Partner : {{$showdata->parner}} <br/><br/>
		{!!Form::submit('Delete')!!}
       <a href="#">Edit </a>    
    {!!Form::close()!!}

@stop