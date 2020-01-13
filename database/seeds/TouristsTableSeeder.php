<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Tourist;

class TouristsTableSeeder extends Seeder
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
    	Tourist::create([
	            'gender' 		=> 'Female',
                'phone'         => '987654321',
                'address'       => 'Yangon',
	            'image' 		=> '/storage/photo/tourist/37075.JPG',
	            'cardtype' 		=> 'NRC',
        		'passport'  	=> '12/AHLANA(N)047531',
        		'passportcard'	=> '["\/storage\/photo\/guidelicense\/64725.jpeg","\/storage\/photo\/guidelicense\/73932.jpeg"]',
        		'nationality'	=> 'Myanmar',
        		'dob'			=> '1997-11-5',
        		'doi'			=> '0000-00-00',
        		'doe'			=> '0000-00-00',
        		'status'		=> 1,
        		'country_id' 	=> 16,
        		'user_id'		=> 18,
	            'created_at' => now(),
	            'updated_at' => now()
	        ]);
    }
}
