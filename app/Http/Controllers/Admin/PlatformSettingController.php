<?php

namespace App\Http\Controllers\Admin;

use App\Models\PlatformSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlatformSettingController extends Controller
{
    
    private $routeName = "admin.platform-settings.";
    private $viewName = "admin.platformsettings.";

    
    public function getBreadCrumbs($param)
    {
        $breadCrumbs = [
            ['name' => 'Platform-Settings', 'url' =>  route('admin.platform-settings.edit'), 'is_active'=> 0 ]
        ];
        if($param == 'index')
            $breadCrumbs[0]['is_active']  = 1;
        elseif($param == 'create')
            $breadCrumbs[] = ['name' => 'Create', 'url' =>  '', 'is_active'=> 1 ];
        elseif($param == 'edit')
            $breadCrumbs[] = ['name' => 'Edit', 'url' =>  '', 'is_active'=> 1 ];

        return $breadCrumbs;
    }
    
    public function getPageName($param)
    {
        if($param == 'index')   
            $pageName = "Platform Settings";
        elseif($param == 'create')
            $pageName = "Create New Platform Setting";
        elseif($param == 'edit')
            $pageName = "Edit This Platform Setting";

        return $pageName;
    }
    
    
    Public function edit()
    {
        $website_setting_home = PlatformSetting::where('tab','Home')->get();
        $website_setting_address = PlatformSetting::where('tab','address')->get();
        $website_setting_social= PlatformSetting::where('tab','Social')->get();
        // dd($website_setting);
        $breadCrumbs = $this->getBreadCrumbs('index');
        $routeName = $this->routeName;
        $pageName = $this->getPageName('index');
        return view($this->viewName.'edit', compact('website_setting_home', 'routeName','breadCrumbs','pageName','website_setting_address','website_setting_social'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if (!empty($data['setting'])) {
            foreach ($data['setting'] as $id => $values) {
                PlatformSetting::where('id', $id)->update(['input_value'=>$values]);
            }
        }
        $request->session()->flash('alert-success', trans('admin_message.update',['name'=>'Website-Settings']));
        return redirect()->route($this->routeName.'edit');
      }

    

   
}
