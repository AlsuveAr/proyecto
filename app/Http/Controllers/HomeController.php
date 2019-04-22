<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        $user = Auth::user();
        //dd($user->hasRole('client'));

        if ($user->hasRole('client')) {
            return redirect()->route('web.home');
        } else if ($user->hasRole('counselor')){
            return redirect()->route('counselor.home');
        } else if($user->hasRole('admin')) {
            return redirect()->route('admin.home');

        }

    }

    public function councelor() {
        return view('dashboard');
    }
}
