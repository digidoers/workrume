<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    private $routeName = "achievements.";
    private $viewName = "achievements.";
  
    public function index()
    {
        $routeName = $this->routeName;
        $id = Auth::user()->id;
        $achievement = Achievement::get()->where('user_id', $id);
        $i = 1;
        return view($this->viewName.'index', compact('achievement', 'i','routeName'));
    }

    public function create()
    {
        
        $routeName = $this->routeName;
        return view($this->viewName.'create', compact('routeName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'associated_with' => 'required',
            'issuer' => 'required',
            'issue_date' => 'required',
            'description' => 'required',
            
        ]);
       
            
        $achievement = $request->all();
        // dd($achievement)
        $id= Auth::user()->id;
        $achievement['user_id'] = $id;
        Achievement::create($achievement);
    
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Achievement']));
        return redirect()->route($this->routeName.'index')->with('message', 'IT WORKS!');;
                        
    }

    Public function edit(Achievement $achievement)
    {

        $routeName = $this->routeName;
        return view($this->viewName.'edit', compact('achievement', 'routeName'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required',
            'associated_with' => 'required',
            'issuer' => 'required',
            'description' => 'required',
            'issue_date' => 'required'
        ]);
        $data = $request->all();
        
        $achievement->update($data);
        
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Achievement']));
        return redirect()->route($this->routeName.'index');
    }

   
    public function destroy(Achievement $achievement, Request $request)
    {
            $achievement->forceDelete();
            $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Achievement']));
        return redirect()->route($this->routeName.'index');
    }
}
