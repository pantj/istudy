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
            {{ Form::model($user, array('url' => 'user/' . $user->id, 'method' => 'PUT', 'class' => 'am-form')) }}
                {{ Form::label('code', Lang::get('resource.user.code')) }}
                {{ Form::text('code', $user->code,array('readonly'=>true)) }}
                <br/>
                {{ Form::label('name', Lang::get('resource.user.name')) }}
                {{ Form::text('name', $user->name) }}
                <br/>
                {{ Form::label('old_password', Lang::get('resource.g.oldpassword')) }}
                {{ Form::password('old_password') }}
                <br/>
                {{ Form::label('password', Lang::get('resource.g.password')) }}
                {{ Form::password('password') }}
                <br/>
                {{ Form::label('password_confirmation', Lang::get('resource.g.password').Lang::get('resource.g.confirm')) }}
                {{ Form::password('password_confirmation') }}
                <br/>
                <div class="am-cf">
                {{ Form::submit(Lang::get('resource.g.modify'), array('class' => 'am-btn am-btn-primary am-btn-sm am-fl')) }}
                </div>
            {{ Form::close() }}
            <br/>
        </div>
    </div>
@stop