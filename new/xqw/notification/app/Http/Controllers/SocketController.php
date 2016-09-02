<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Request;
use Illuminate\Support\Facades\Redis;

class SocketController extends Controller {



//	public function __construct()
//	{
//		$this->middleware('guest');
//	}

	public function index()
	{

		return view('socket');

	}

	public function writemessage()
	{

		return view('writemessage');

	}

	public function sendMessage(){
		$ii=0;
		//$redis = Redis::connection();
		$text=Request::input('text');
		$username=Request::input('username');
		$message=array('text'=>$text,'username'=>$username);
		$n=new Notification();
		$n->username=$username;
		$n->text=$text;
		$n->save();
		//dd($message);
		//$redis->publish('message', 'message');

		return view('userHome',compact('username'));

	}


}
