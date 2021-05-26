<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    private $routeName = "update-profile.";
    private $viewName = "update-profile.";
    
    public function updateProfile()

    {
        $user = Auth::user();
        // dd($user);
        $routeName = $this->routeName;
        $i = 1;
        return view('updateprofile', compact('user', 'routeName', 'i'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'min:6|max:20',
            'password_confirmation' =>'required_with:password|same:password|min:6|max:20',
            'dob' => 'required',
            'phone_no' => 'required|integer|min:10',
            'user_role' => 'required',
            'country' => 'required',
            'interest' => 'required'
        ]);

        $data = $request->all();
        // dd($data);
        $interest = $data['interest'] ;
        $user->update($data);
        $user->topic()->sync($interest);
		$request->session()->flash('alert-success', trans('admin_message.update',['name'=>'User']));
        return redirect()->route($this->routeName.'edit');
    }

	public function changePassword()
	{
	return view('changepassword');
	}

	public function updatePassword(Request $request)
	{
			
	if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
		// The passwords matches
	return redirect()->back()->with("alert-danger","New Password cannot be same as your current password. Please choose a different password.");

	}
		
	if(strcmp($request->get('current-password'), $request->get('password')) == 0){
		//Current password and new password are same
	return redirect()->back()->with("alert-danger","New Password cannot be same as your current password. Please choose a different password.");
	}

		$request->validate([
				'current-password' => 'required',
				'password' => 'required|string|min:6|max:20',
				'password_confirmation' => 'required|same:password|min:6|max:20',
		]);
	//Change Password
	$user = Auth::user();
	$user->password = bcrypt($request->get('password'));
	$user->save();
	$request->session()->flash('alert-success', trans('admin_message.update',['name'=>'User Password']));
	return redirect()->route('change-password.edit');

	}
}
