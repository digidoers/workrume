<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  
    public function create()
    {
        return view('post.create');
    }
	
	public function store(Request $request)
    {
        $id = Auth::user()->id;
		dd($request->all());
    }
}
