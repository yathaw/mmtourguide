<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

        // 1
    	$admin = User::create([
	            'name' => 'Admin',
	            'email' => 'admin@gmail.com',
	            'password' =>Hash::make('123456789'),
        		'registerdate'  => $today,
	            'created_at' => now(),
	            'updated_at' => now()
	        ]);
    	$admin->assignRole('admin');

    }
}
