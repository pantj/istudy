@extends('layouts.backend.master')
@section('content')
    <p>this is index.</p>	
    {{$cnt}}
	<div>
    {{$total}}	
	</div>
	@foreach($ls as $item)
	<div>{{$item->id}}
	{{$item->name}}
	</div>
	@endforeach
@show