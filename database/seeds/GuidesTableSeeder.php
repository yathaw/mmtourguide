<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Guide;
use App\Place;
use App\Language;

class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $gender = ('male'|'female');
        
        $userid = 2; $j =1;
        for($i = 0; $i < 15; $i++) 
        {
            Guide::create([
	            'license' 				=> 	'RG - 635',
	            'licensecertificate' 	=> 	'["\/storage\/photo\/guidelicense\/32745.jpeg","\/storage\/photo\/guidelicense\/22747.jpeg"]',
	            'phone' 				=>	$faker->phoneNumber,
        		'address'  				=> 	$faker->address,
        		'gender'  				=>  $gender,
        		'profile'				=>  '/storage/photo/guide/travelguide.png',
        		'cv'					=>  '/storage/pdf/guide_cv/64181.pdf',
        		'approveddate'			=>  now(),
        		'bio'					=>  $faker->text,
        		'hourrate'				=>  $faker->randomNumber(2)." USD",
        		'dailyrate'				=> $faker->randomNumber(2)." USD",
        		'guidenumber'			=> "MM".$faker->randomNumber(5),
        		'status'				=> 1,
        		'user_id'				=> $userid++,
        		'division_id'			=> $j++,
	            'created_at' 			=> now(),
	            'updated_at' 			=> now()
	        ]);

        }


        for($i = 0; $i < 30; $i++)
        {
            $places = DB::table('places')->select('id')->inRandomOrder()->first();

            $languages = DB::table('languages')->select('id')->inRandomOrder()->first();

            $guides = DB::table('guides')->select('id')->inRandomOrder()->first();

            DB::table('guide_place')->insert([
                'guide_id' => $guides->id,
                'place_id' => $places->id
            ]);

            DB::table('guide_language')->insert([
                'guide_id' => $guides->id,
                'language_id' => $languages->id
            ]);
        }
        

       


    }
}
