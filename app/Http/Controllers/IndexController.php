<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Lang;
class IndexController extends Controller
{

	public  function __construct()
	{
		if(!Auth::check()){
			Auth::loginUsingId(1);
		}
		
	}

    public function indexAction()
    {
    	$countries = Lang::all();
    	return view("index")->with('countries',$countries);
    }
}
