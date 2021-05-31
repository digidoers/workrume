<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Posts;
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
        $id = Auth::user()->id;
        // dd($id);
        $user_post = User::where('id', $id)->get();
        // dd($user_post->topic());
        return view('home', compact('user', 'user_post'));
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
