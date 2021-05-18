<?php

namespace Database\Seeders;

use App\Models\PlatformSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'fevicon' => ['input_value'=> '', 'input_type' => 'file', 'label_name'=> 'Fevicon', 'tab'=> 'Home'],
            'Heading' => ['input_value'=> '', 'input_type' => 'text', 'label_name'=> 'Heading', 'tab'=> 'Home'],
            'Footer Text' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Footer Text', 'tab'=> 'Home'],
            'facebook-link' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Facebook Link', 'tab'=> 'Social'],
            'google-link' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Google Link', 'tab'=> 'Social'],
            'Address' => ['input_value'=> ']', 'input_type' => 'text', 'label_name'=> 'Address', 'tab'=> 'address'],
            
            
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
