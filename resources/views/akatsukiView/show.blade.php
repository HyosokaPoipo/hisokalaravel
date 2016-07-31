@extends('masterview.masterpage')

@section('title') Show Page
@stop


@section('body') This is Body of Show Page <br/>
	{!!Form::open([
		'method' => 'delete',
		'route'=>['isitabel.destroy', $showdata->Id]
		])!!}
        Name : {{$showdata->Name}} <br/>
		Position : {{$showdata->Position}} <br/>
		Secret Jutsu : {{$showdata->Secret_Jutsu}} <br/>
		Partner : {{$showdata->Parner}} <br/><br/>
		{!!Form::submit('Delete')!!}
       <a href="#">Edit </a>    
    {!!Form::close()!!}

@stop