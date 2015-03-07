@extends('layouts.default')
@section('main')
    <p>this is default page.</p>
	{{(isset($user)) ? $user->code : '' }}
	{{ Session::get('message')}}
	{{ Session::has('user')?Session::get('user')->code:"1111"}}
@endsection