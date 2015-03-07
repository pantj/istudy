@extends('layouts.master')
@section('content')
    <p>this is index.</p>
	{{(isset($user)) ? $user->email : '' }}	
@endsection