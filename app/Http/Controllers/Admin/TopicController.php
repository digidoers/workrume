<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicController extends Controller
{
  
    private $routeName = "admin.topics.";
    private $viewName = "admin.topics.";

    
    public function getBreadCrumbs($param){
        $breadCrumbs = [
            ['name' => 'Topic', 'url' =>  route('admin.topics.index'), 'is_active'=> 0 ]
        ];
        if($param == 'index')
            $breadCrumbs[0]['is_active']  = 1;
        elseif($param == 'create')
            $breadCrumbs[] = ['name' => 'Create', 'url' =>  '', 'is_active'=> 1 ];
        elseif($param == 'edit')
            $breadCrumbs[] = ['name' => 'Edit', 'url' =>  '', 'is_active'=> 1 ];

        return $breadCrumbs;
    }
    
    public function getPageName($param){
        
        
        if($param == 'index')   
            $pageName = "Topic List";
        elseif($param == 'create')
            $pageName = "Create New Topic";
        elseif($param == 'edit')
            $pageName = "Edit This Topic";

        return $pageName;
    }
    
    public function index()
    {
        $routeName = $this->routeName;
        $topic = Topic::get();
        $i = 1;
        $breadCrumbs = $this->getBreadCrumbs('index');
        $pageName = $this->getPageName('index');
        return view($this->viewName.'index', compact('topic', 'i','routeName','breadCrumbs','pageName'));
       
    }

    public function create()
    {
        $breadCrumbs = $this->getBreadCrumbs('create');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('create');
        return view($this->viewName.'create', compact('routeName','breadCrumbs','pageName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            
           
        ]);
        $data = $request->all();
        Topic::create($data);
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Topic']));
        return redirect()->route($this->routeName.'index');
                        
    }

    Public function edit(Topic $topic){

        $breadCrumbs = $this->getBreadCrumbs('edit');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('edit');
        return view($this->viewName.'edit', compact('topic', 'routeName','breadCrumbs','pageName'));
    }

    public function update(Request $request, Topic $topic){
        
        
        $request->validate([
            'name' => 'required|min:2|max:50',
           
        ]);
        $data = $request->all();
        $topic->update($data);
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Topic']));
        return redirect()->route($this->routeName.'index');


    }

    public function show(Topic $topic){
        return "show";
    }

    public function destroy(Topic $topic, Request $request){
            
            $topic->forceDelete();
            $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Topic']));
        return redirect()->route($this->routeName.'index');
    }

    public function status(Topic $topic, Request $request)
    {
        $var = $topic->status;
        ($var==1)?$topic->status=0:$topic->status=1;
        $topic->save();
        $request->session()->flash('alert-success', trans('admin_message.status_change',['name'=>'Topic']));
        return redirect()->route($this->routeName.'index');
    }

  
   
}
