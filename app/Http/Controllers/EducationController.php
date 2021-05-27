<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    private $routeName = "education.";
    private $viewName = "education.";
  
    public function index()
    {
        $routeName = $this->routeName;
        $id = Auth::user()->id;
        $education = Education::get()->where('user_id', $id);
        $i = 1;
        return view($this->viewName.'index', compact('education', 'i','routeName'));
    }

    public function create()
    {
        
        $routeName = $this->routeName;
        return view($this->viewName.'create', compact('routeName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'institute' => 'required',
            'board' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
       
            
        $education = $request->all();
        $id= Auth::user()->id;
        $education['user_id'] = $id;
        // dd($education);
        Education::create($education);
    
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Education']));
        return redirect()->route($this->routeName.'index');
                        
    }

    Public function edit(Education $education)
    {

        $routeName = $this->routeName;
        return view($this->viewName.'edit', compact('education', 'routeName'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'institute' => 'required',
            'board' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $data = $request->all();
        
        $education->update($data);
        
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Education']));
        return redirect()->route($this->routeName.'index');
    }

   
    public function destroy(Education $education, Request $request)
    {
            $education->forceDelete();
            $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Education']));
        return redirect()->route($this->routeName.'index');
    }
}
