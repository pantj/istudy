@extends('layouts.backend.master')
 
@section('main')
  <div class="am-g am-g-fixed">
    <div class="am-u-lg-6 am-u-md-8">
      <br/>
      @if (Session::has('message'))
        <div class="am-alert am-alert-{{ Session::get('message') }}" data-am-alert>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif
      @if ($errors->has())
        <div class="am-alert am-alert-danger" data-am-alert>
          <p>{{ $errors->first() }}</p>
        </div>
      @endif
      {{ Form::open(array('url' => 'register', 'class' => 'am-form')) }}
        {{ Form::label('code', Lang::get('resource.user.code')) }}
        {{ Form::text('code', Input::old('code')) }}
        <br/>
        {{ Form::label('name', Lang::get('resource.user.name')) }}
        {{ Form::text('name', Input::old('name')) }}
        <br/>
        {{ Form::label('password', Lang::get('resource.g.password')) }}
        {{ Form::password('password') }}
        <br/>
        {{ Form::label('password_confirmation', Lang::get('resource.g.confirmpassword')) }}
        {{ Form::password('password_confirmation') }}
        <br/>
        <div class="am-cf">
          {{ Form::submit(Lang::get('resource.user.register'), array('class' => 'am-btn am-btn-primary am-btn-sm am-fl')) }}
        </div>
      {{ Form::close() }}
      <br/>
    </div>
  </div>
@stop