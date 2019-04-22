<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;


class RedirectController extends Controller
{
    public function index() {
    	$user = Auth::user();
    	if (Auth::check()) {
    		if ($user->hasRole('client')) {
	            return redirect()->route('web.home');
	        } else if ($user->hasRole('counselor')){
                return redirect()->route('admin.home');
            } else if($user->hasRole('admin')) {
	            return redirect()->route('admin.home');
	        }
    	} else {
    		return view('welcome-web');
    	}
    }
}
