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

class ManagerController extends BaseController {

	public function __construct(){
		$this->validatorNiceNames = array(
				'code' =>Lang::get("resource.user.code"),
				'password' =>Lang::get("resource.g.password"),
		);
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	
	public function login(){
		$rules = array(
			'code'       => 'required',/*|email*/
			'password'    => 'required',/*|min:6*/
			'remember_me' => 'boolean',
		);		
		
		$validator = Validator::make(Input::all(), $rules);		
		$validator->setAttributeNames($this->validatorNiceNames);
		
		if ($validator->passes())
		{
			if (Auth::attempt(array(
				'code'    => Input::get('code'),
				'password' => Input::get('password'),
				'block'    => 0), (boolean) Input::get('remember_me')))
			{
				return Redirect::to('manager');//Redirect::intended登录前页面
			} else {
				return Redirect::to('mlogin')->withInput()->with('message',Lang::get('resource.user.login.error'));
			}
		} else {
			return Redirect::to('mlogin')->withInput()->withErrors($validator);
		}
	}
	private function oldLogon(){
		$credentials = array(
		    'code'=>Input::get('username'),
			'password'=>Input::get('pass'),
		);
		try{
			if (Auth::attempt(array('code'=>Input::get('username'), 'password'=>Input::get('pass')))) {
                return Redirect::to('manager')
                  ->with('message', '成功登录');
            } else {
                return Redirect::to('mlogin')
                    ->with('message', '用户名密码不正确')
                    ->withInput();
            }
            //数据中的密码需要Hash::make("admin")后的结果
			//$user = DB::table('tb_user')->where('code', $credentials['code'])->first();
			//$user = User::where('code', $credentials['code'])->first();
			//return Redirect::to('index')->with('user',$user)->with('message', 'Login Successfully');
			//redirect to data is inserted into session,in viewer you can use Session::get('')
			//return Redirect::route('profile', array('user' => 1));
            //var_dump($user->email);
			//var_dump($user->password);
			//var_dump($user->id);
		}catch(Exception $e){
			throw $e;
		}
		
	}
	
	public function logout(){
		Auth::logout();
		return Redirect::to('mlogin');
	}

}
