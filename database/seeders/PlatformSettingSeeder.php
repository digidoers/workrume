<?php

namespace Database\Seeders;

use App\Models\PlatformSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlatformSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {   
        
        $key_value = [
            'name' => ['input_value'=> '', 'input_type' => 'text', 'label_name'=> 'Name', 'tab'=> 'Home'],
            'first-name' => ['input_value'=> '', 'input_type' => 'text', 'label_name'=> 'First Name', 'tab'=> 'Home'],
            'last-name' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Last Name', 'tab'=> 'Home'],
            'facebook-link' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Facebook Link', 'tab'=> 'Social'],
            'google-link' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Google Link', 'tab'=> 'Social'],
            
            
            ];
            foreach ($key_value as $kv => $val) {
            
            $ps = PlatformSetting::where('key', $kv)->first();
            if(!$ps){
            
            DB::table('platform_settings')->insert([
            'key' => $kv,
            'input_value' => $val['input_value'],
            'is_require' => '1',
            'input_type' => $val['input_type'],
            'label_name' => $val['label_name'],
            'tab' => $val['tab'],
            ]);
            }
            }
    }
}
