@extends('masterview.masterpage')

@section('title') Show Page
@stop


@section('body') This is Body of Show Page <br/>

 	    Name : {{$data->Name}} <br/>
		Position : {{$data->Position}} <br/>
		Secret Jutsu : {{$data->Secret_Jutsu}} <br/>
		Partner : {{$data->Parner}} <br/>
   
   <br/>
   <a href="#">Edit </a>     &nbsp;   <a href="#">Delete </a>


@stop