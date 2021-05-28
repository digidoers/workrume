<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    private $routeName = "admin.ads.";
    private $viewName = "admin.ads.";
    

    
    public function getPageName($param)
    {
        if($param == 'index')   
            $pageName = "Advertisement List";
        elseif($param == 'create')
            $pageName = "Create New Advertisement";
        elseif($param == 'edit')
            $pageName = "Edit This Advertisement";

        return $pageName;
    }
    
    public function getBreadCrumbs($param){
        $breadCrumbs = [
            ['name' => 'Ads', 'url' =>  route('admin.ads.index'), 'is_active'=> 0 ]
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
         $ad = Ads::get();
         $i = 1;
         $breadCrumbs = $this->getBreadCrumbs('index');
         $pageName = $this->getPageName('index');
        return view($this->viewName.'index', compact('ad', 'i','routeName', 'breadCrumbs', 'pageName'));
        
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
            'title' => 'required|min:2|max:50',
            'content' => 'required',
            'ad_type' => 'required',
            'position' =>'required'
            
        ]);
        $data = $request->all();
        // dd($data);
        Ads::create($data);
        $request->session()->flash('alert-success', trans('admin_message.create',['name'=>'Ads']));
        return redirect()->route($this->routeName.'index');
                        
    }

    Public function edit(Ads $ad){
        $breadCrumbs = $this->getBreadCrumbs('edit');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('edit');
        return view($this->viewName.'edit', compact('ad', 'routeName','breadCrumbs','pageName'));
    }

    public function update(Request $request, Ads $ad)
    {
        $request->validate([
            'title' => 'required|min:2|max:50',
            'content' => 'required',
            'ad_type' => 'required',
            'position' =>'required'
        ]);
        $data = $request->all();
        $ad->update($data);
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Ads']));
        return redirect()->route($this->routeName.'index');
    }

    public function show(Ads $ad){
        return "show";
    }

    public function destroy(Ads $ad, Request $request){
            
        $ad->forceDelete();
        $request->session()->flash('alert-success', trans('admin_message.delete',['name'=>'Ads']));
        return redirect()->route($this->routeName.'index')->with('message', 'Succesfully Deleted');
    }

}
