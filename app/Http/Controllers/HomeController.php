<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$user = Auth::user();	
        $post = Posts::get()->first()->where('user_id', Auth::user()->id);
        // dd($post);
        return view('home', compact('user', 'post'));
    }

    public function post()
    {
       //
       
    }

    

}
