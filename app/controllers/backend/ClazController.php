<?php
namespace backend;

use \BaseController;
use \View;
use \Claz;
use \DB;


class ClazController extends BaseController{
	public function ls(){
		//$claz = Claz::where('status',1)->get();
		//$claz = Claz::get();
		//$claz = Claz::all()
		$claz = Claz::paginate(10);
		$cnt = $claz->count();
		$total = $claz->getTotal();//$claz->total();5.0的方法，4使用getTotal
		/*4.0方法
		•getCurrentPage
		•getLastPage
		•getPerPage
		•getTotal
		•getFrom
		•getTo
		•count*/
		/*5.0方法
		•currentPage
		•lastPage
		•perPage
		•hasMorePages
		•url
		•nextPageUrl
		•total
		•count*/


		return View::make("backend.claz")
		             ->with('ls',$claz)
					 ->with('cnt',$cnt)
					 ->with('total',$total);
		//return User::find(1)->toJson();
		//class User extends Eloquent {
		//	protected $hidden = array('password');隐藏字段
		//}

	}
}


