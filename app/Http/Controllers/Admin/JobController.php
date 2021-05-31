<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    private $routeName = "admin.jobs.";
    private $viewName = "admin.jobs.";
    

    
    public function getPageName($param)
    {
        if($param == 'index')   
            $pageName = "Job List";
        elseif($param == 'create')
            $pageName = "Create New Job";
        elseif($param == 'edit')
            $pageName = "Edit This Job";

        return $pageName;
    }
    
    public function getBreadCrumbs($param){
        $breadCrumbs = [
            ['name' => 'Jobs', 'url' =>  route('admin.jobs.index'), 'is_active'=> 0 ]
        ];
        if($param == 'index')
            $breadCrumbs[0]['is_active']  = 1;
        elseif($param == 'create')
            $breadCrumbs[] = ['name' => 'Create', 'url' =>  '', 'is_active'=> 1 ];
        elseif($param == 'edit')
            $breadCrumbs[] = ['name' => 'Edit', 'url' =>  '', 'is_active'=> 1 ];

        return $breadCrumbs;
    }

    
    public function index()
    {
         $routeName = $this->routeName;
         $job = Job::get();
         $i = 1;
         $breadCrumbs = $this->getBreadCrumbs('index');
         $pageName = $this->getPageName('index');
        return view($this->viewName.'index', compact('job', 'i','routeName', 'breadCrumbs', 'pageName'));
        
    }

    public function create()
    {
        $breadCrumbs = $this->getBreadCrumbs('create');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('create');
        return view($this->viewName.'create', compact('routeName', 'breadCrumbs', 'pageName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|min:2|max:50',
            'skills' => 'required',
            'description' => 'required',
            'eligibility' =>'required',
            'job_type' =>'required',
            'expire_date' => 'required'
            
        ]);
        $data = $request->all();
        // dd($data);
        Job::create($data);
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Job']));
        return redirect()->route($this->routeName.'index');
                        
    }

    Public function edit(Job $job){
        $breadCrumbs = $this->getBreadCrumbs('edit');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('edit');
        return view($this->viewName.'edit', compact('job', 'routeName','breadCrumbs','pageName'));
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'role' => 'required|min:2|max:50',
            'skills' => 'required',
            'description' => 'required',
            'eligibility' =>'required',
            'job_type' =>'required',
            'expire_date' => 'required'
        ]);
        $data = $request->all();
        $job->update($data);
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Job']));
        return redirect()->route($this->routeName.'index');
    }

    public function show(Job $job){
        return "show";
    }

    public function destroy(Job $job, Request $request){
            
        $job->forceDelete();
        $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Job']));
        return redirect()->route($this->routeName.'index')->with('message', 'Succesfully Deleted');
    }

    public function status(Job $job, Request $request)
    {
        // $var = $page->status;
        // ($var==1)?$page->status=0:$page->status=1;
        // $page->save();
        // $request->session()->flash('alert-success', trans('admin_message.status_change',['name'=>'Page']));
        // return redirect()->route($this->routeName.'index');
    }

    public function dashboard()
    {
        // return view('admin.users.dashboard');
    }

}
