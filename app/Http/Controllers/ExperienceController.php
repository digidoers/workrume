<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
  
    private $routeName = "experience.";
    private $viewName = "experience.";
  
    public function index()
    {
        $routeName = $this->routeName;
        $id = Auth::user()->id;
        $users = Experience::get()->where('user_id', $id);
        $i = 1;
        // $breadCrumbs = $this->getBreadCrumbs('index');
        // $pageName = $this->getPageName('index');
        return view($this->viewName.'index', compact('users', 'i','routeName'));
    }

    public function create()
    {
        
        $routeName = $this->routeName;
        return view($this->viewName.'create', compact('routeName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addmore.*.job_role' => 'required|min:2|max:50',
            'addmore.*.job_description' => 'required|min:10|max:100',
            'addmore.*.org_name' => 'required',
            'addmore.*.is_current_working' => 'required',
            'addmore.*.start_date' => 'required',
            'addmore.*.end_date' => 'required'
        ]);
       
            
        // $experience = $request->all();
        // dd(Auth::user());
        $id= Auth::user()->id;
        
        // dd($request->addmore);
        foreach ($request->addmore as $key => $value) {
           
            $value['user_id'] = $id;
            
            Experience::create($value);
        }
       
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Experience']));
        return redirect()->route($this->routeName.'index')->with('message', 'IT WORKS!');;
                        
    }

    Public function edit(Experience $experience)
    {

        $routeName = $this->routeName;
        return view($this->viewName.'edit', compact('experience', 'routeName'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'job_role' => 'required|min:2|max:50',
            'job_description' => 'required|min:10|max:100',
            'org_name' => 'required',
            'is_current_working' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $data = $request->all();
        
        $experience->update($data);
        
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Experience']));
        return redirect()->route($this->routeName.'index');
    }

   
    public function destroy(Experience $experience, Request $request)
    {
            $experience->forceDelete();
            $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Experience']));
        return redirect()->route($this->routeName.'index');
    }
}
