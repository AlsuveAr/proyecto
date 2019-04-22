<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
    	$user = Auth::user();
    	$user->messages()->create([
			'message' => $request()->input('body')
		]);
    	event(new App\Events\PrivateMessage($request->all()));

		return ['status' => 'OK'];
    }
}
