<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FriendController extends Controller
{
   public function suggestionsAction(Request $request)
   {
   		
   		if(\Auth::check()){
   			return \Auth::user()->suggestions($request->input('country'));
   		}else{
   			abort(403, 'Unauthorized action.');
   		}
   }
}
