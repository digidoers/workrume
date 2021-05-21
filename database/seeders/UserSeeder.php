<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ps = User::where('email', 'admin@yopmail.com')->first();
        if (!$ps) {
            DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@yopmail.com',
            'password' => bcrypt('123456789'),
            'is_admin' => '1',
            'status' =>'1',
            'dob' => '12/12/2000',
            'phone_no' => '7788996564',
            'user_role' => 'Admin',
            'country' => 'India'
            ]);
        }
    }
}
