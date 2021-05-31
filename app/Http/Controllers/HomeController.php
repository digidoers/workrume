<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$user = Auth::user();	
        return view('home', compact('user'));
    }

    public function post()
    {
       //
       
    }

	public function welcome() {
		if (!empty(Auth::user())) {
			return redirect()->route('home');
		}
		else {
			return redirect()->route('login');
		}
	}
	
}
