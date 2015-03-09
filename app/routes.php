<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/********************************frontend**********************************************/
Route::get('index',function(){return View::make('index');});
Route::get('/', function(){	return View::make('default');});
Route::get("about",function(){return View::make("about");});

/***********************************backend*********************************************/
Route::get('mlogin',  function(){return View::make('backend.login');});
Route::post('mlogin', array('before' => 'csrf','uses' => 'backend\ManagerController@login'));
Route::get('register',function(){return View::make('backend.user.register');});
Route::post('register',array('before' => 'csrf','uses' => 'backend\RegisterController@register'));

Route::group(array('before'=>'auth'),function()
{	
    Route::get('mlogout', 'backend\ManagerController@logout');
	Route::get('manager', function(){return View::make('backend.index');});
	Route::get('user/{id}/edit',array('as'=>'user.edit',function($id){
	    if(Auth::user()->is_admin or Auth::id()==$id){
	    	return View::make('backend.user.edit')->with('user',User::find($id));
	    }else{
	    	return Redirect::to('/mlogin');
	    }
	}));
	
    Route::get("claz","backend\ClazController@ls");
	
});

/************************************test*************************************************/
Route::get('hello', function(){	return 'Hello World';});
/*RouteGroup::make('auth')->before('guest')->controller('AuthorityController')->go(function ($route) { 
  
     # 退出 
     $route->get('logout')->as('logout')->uses('getLogout')->beforeClear(); 
}

RouteGroup::make()->controller('BlogController')->go(function ($route) { 
  
     # 博客首页 
     $route->get( '/'            )->as('home'            )->uses('getIndex'           ); 
}*/

