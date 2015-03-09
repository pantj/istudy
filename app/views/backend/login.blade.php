@extends('layouts.backend.master')

@section('main')
  <div class="am-g am-g-fixed">
    <div class="am-u-lg-6 am-u-md-8">
      <br/>
      @if (Session::has('message'))
        <div class="am-alert am-alert-{{Session::get('type', function() { return 'danger'; })}}" data-am-alert>            
            <p>{{ Session::get('message') }}</p>            
        </div>
      @endif
      @if ($errors->has())
        <div class="am-alert am-alert-danger" data-am-alert>
          <p>{{ $errors->first() }}</p>
        </div>
      @endif
      {{ Form::open(array('url' => 'mlogin', 'class' => 'am-form')) }}
        {{ Form::label('code', Lang::get('resource.user.code')) }}
        {{ Form::text('code', Input::old('code')) }}
        {{ Form::hidden('code_i18n',  Lang::get('resource.user.code')) }}
        <br/>
        {{ Form::label('password', Lang::get('resource.g.password')) }}
        {{ Form::password('password') }}
        {{ Form::hidden('password_i18n',  Lang::get('resource.g.password')) }}
        <br/>
        <label for="remember_me">
          <input id="remember_me" name="remember_me" type="checkbox" value="1">
          {{Lang::get('resource.g.rememberme')}}
        </label>
        <br/>
        <div class="am-cf">
          {{ Form::submit(Lang::get('resource.g.login'), array('class' => 'am-btn am-btn-primary am-btn-sm am-fl')) }}
        </div>
      {{ Form::close() }}
      <br/>
    </div>
  </div>
@stop