<?php

namespace backend;

use \DB;
use \BaseController;
use \Input;
use \Redirect;
use \Exception;
use \User;
use \Auth;
use \Validator;
use \Lang;
use \Hash;

class RegisterController extends BaseController {
	
	public function __construct(){
	     $this->validatorNiceNames = array(
	     		'code'=>Lang::get('resource.user.code'),
	     		'name'=>Lang::get('resource.user.name'),
	     		'password'=>Lang::get('resource.g.password'),
	     		'password_confirmation'=>Lang::get('resource.g.confirmpassword'),
	     );	
	}
	
	public function register(){
		$rules = array(
			'code' => 'required|email|unique:tb_user,code',
			'name' => 'required|min:4|unique:tb_user,name',
			'password' => 'required|min:6|confirmed',
		);
		$validator = Validator::make(Input::all(), $rules);
		$validator->setAttributeNames($this->validatorNiceNames);
		
		if ($validator->passes())
		{
			$user = User::create(Input::only('code', 'password', 'name'));
			$user->password = Hash::make(Input::get('password'));
			if ($user->save())
			{
				return Redirect::to('mlogin')->with('message', Lang::get('resource.user.register.successfully'))->with('type','success');
			} else {
				return Redirect::to('register')->withInput()->with('message',Lang::get('resource.user.register.failure'))->with('type','danger');
			}
		} else {
			return Redirect::to('register')->withInput()->withErrors($validator);
		}
	}
}
