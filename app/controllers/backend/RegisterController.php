<?php

namespace backend;

use \DB;
use \BaseController;
use \Input;
use \Redirect;
use \Exception;
use \User;
use \Auth;

class ManagerController extends BaseController {
	public function register(){
		$rules = array(
			'email' => 'required|email|unique:users,email',
			'name' => 'required|min:4|unique:users,nickname',
			'password' => 'required|min:6|confirmed',
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes())
		{
			$user = User::create(Input::only('email', 'password', 'nickname'));
			$user->password = Hash::make(Input::get('password'));
			if ($user->save())
			{
				return Redirect::to('login')->with('message', array('type' => 'success', 'content' => 'Register successfully, please login'));
			} else {
				return Redirect::to('register')->withInput()->with('message', array('type' => 'danger', 'content' => 'Register failed'));
			}
		} else {
			return Redirect::to('register')->withInput()->withErrors($validator);
		}
	}
}
