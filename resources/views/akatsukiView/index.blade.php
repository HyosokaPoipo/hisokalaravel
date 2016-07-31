@extends('masterview.masterpage')

@section('title') Main Akatsuki Page 
@stop


@section('body') Main Akatsuki Body in index.blade

<h2> isi akatsuki_tables : </h2>
 <?php $index = 0; ?>
	@foreach($alldata as $data)
		<?php $index++; ?>
		No : {{$index++}} <br/>
		Name : {{$data->Name}} <br/>
		Position : {{$data->Position}} <br/>
		Secret Jutsu : {{$data->Secret_Jutsu}} <br/>
		Partner : {{$data->Parner}} <br/>
	***************************************************	<br/>
	@endforeach
 
@stop