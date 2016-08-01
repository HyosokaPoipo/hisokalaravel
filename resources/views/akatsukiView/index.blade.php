@extends('masterview.masterpage')

@section('title') Main Akatsuki Page 
@stop


@section('body') Main Akatsuki Body in index.blade

<h2> isi akatsuki_tables : </h2>
 <?php $index = 0; ?>
	@foreach($alldata as $data)
		<?php $index++; ?>
		No : {{$index++}} <br/>
		Id : {{$data->id}} <br/>
		Name : {{$data->name}} <br/>
		Position : {{$data->position}} <br/>
		Secret Jutsu : {{$data->secret_jutsu}} <br/>
		Partner : {{$data->parner}} <br/>
	***************************************************	<br/>
	@endforeach
 
@stop