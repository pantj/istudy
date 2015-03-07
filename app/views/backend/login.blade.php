@extends('layouts.backend.master')
 
@section('main')
  <div class="am-g am-g-fixed">
    <div class="am-u-lg-6 am-u-md-8">
      <br/>
      @if (Session::has('message'))
        <div class="am-alert am-alert-danger" data-am-alert>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif
      @if ($errors->has())
        <div class="am-alert am-alert-danger" data-am-alert>
          <p>{{ $errors->first() }}</p>
        </div>
      @endif
      {{ Form::open(array('url' => 'mlogon', 'class' => 'am-form')) }}
        {{ Form::label('email', Lang::get('resource.user.code')) }}
        {{ Form::text('email', Input::old('email')) }}
        <br/>
        {{ Form::label('password', Lang::get('resource.g.password')) }}
        {{ Form::password('password') }}
        <br/>
        <label for="remember_me">
          <input id="remember_me" name="remember_me" type="checkbox" value="1">
          Remember Me
        </label>
        <br/>
        <div class="am-cf">
          {{ Form::submit('Login', array('class' => 'am-btn am-btn-primary am-btn-sm am-fl')) }}
        </div>
      {{ Form::close() }}
      <br/>
    </div>
  </div>
@stop