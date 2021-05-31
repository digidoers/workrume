<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Exception;

class PostController extends Controller
{
  
    public function create()
    {
        return view('post.create');
    }
	
	public function store(Request $request)
    {
		$request->validate([
            'name' => 'required',
            'description' => 'required',
            'post_image' => 'file|image|mimes:jpeg,png,gif',
            'post_video' => 'file|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
        ]);
		
        try{
			$image_path = $video_path = '';
			if($request->hasFile('post_image')) {
				$image_path = uploadMedia($request->file('post_image'));
			}
			
			if($request->hasFile('post_video')) {
				$video_path = uploadMedia($request->file('post_video'), 'video');
			}
			
			$data['user_id'] = Auth::user()->id;
			$data['name'] = $request->name;
			$data['description'] = $request->description;
			$data['image_path'] = $image_path;
			$data['video_path'] = $video_path;
			$data['is_public'] = $request->is_public;
			$data['group_id'] = ($request->group_id) ?? null;
			$savedData = \App\Models\Posts::create($data);
				
			if($savedData) {
				$interest = ($request->interest) ?? '' ;
				if (!empty($interest)) {
					$savedData->topic()->sync($interest);
				}
				
				$request->session()->flash('alert-success', 'Post has been submitted successfully.');
				return redirect()->route('home');
			} else {
				return redirect()->back()->withInput($request->all())->with('error','Somthing went wrong!!!. Please try again.');
			}
			
        }catch(Exception $e){
            return redirect()->back()->withInput($request->all())->with('error',$e->getMessage());
        }
    }
}
