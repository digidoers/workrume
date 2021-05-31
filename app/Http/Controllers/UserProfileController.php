<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    
    public function create()
    {
        return view('userprofile.create');
    }
	
	public function store(Request $request)
    {
		$request->validate([
            'about' => 'required',
            'profile_image' => 'file|image|mimes:jpeg,png,gif',
            'profile_banner' => 'file|image|mimes:jpeg,png,gif'
        ]);
		
			$profile_image = $profile_banner = '';
			if($request->hasFile('profile_image')) {
				$image_path = uploadMedia($request->file('profile_image'));
			}
			
			if($request->hasFile('profile_banner')) {
				$profile_banner = uploadMedia($request->file('profile_banner'));
			}
			
			$data['user_id'] = Auth::user()->id;
			$data['about'] = $request->about;
			$data['profile_image'] = $profile_image;
			$data['profile_banner'] = $profile_banner;
			$savedData = \App\Models\UserProfile::create($data);
			
    }
}
