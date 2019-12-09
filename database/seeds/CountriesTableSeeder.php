<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('countries')->insert([
            'name'       => 'United Arab emirates',
            'passportcover' 	 => '/storage/photo/passportcover/ae.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 2
        DB::table('countries')->insert([
            'name'       => 'Germany',
            'passportcover' 	 => '/storage/photo/passportcover/de.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 3
        DB::table('countries')->insert([
            'name'       => 'Finland',
            'passportcover' 	 => '/storage/photo/passportcover/fi.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 4
        DB::table('countries')->insert([
            'name'       => 'Luxembourg',
            'passportcover' 	 => '/storage/photo/passportcover/lu.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 5
        DB::table('countries')->insert([
            'name'       => 'Spain',
            'passportcover' 	 => '/storage/photo/passportcover/es.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 6
        DB::table('countries')->insert([
            'name'       => 'Denmark',
            'passportcover' 	 => '/storage/photo/passportcover/dk.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 7
        DB::table('countries')->insert([
            'name'       => 'Italy',
            'passportcover' 	 => '/storage/photo/passportcover/it.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 8
        DB::table('countries')->insert([
            'name'       => 'Netherlands',
            'passportcover' 	 => '/storage/photo/passportcover/nl.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 9
        DB::table('countries')->insert([
            'name'       => 'Austria',
            'passportcover' 	 => '/storage/photo/passportcover/at.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 10
        DB::table('countries')->insert([
            'name'       => 'Portugal',
            'passportcover' 	 => '/storage/photo/passportcover/pt.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 11
        DB::table('countries')->insert([
            'name'       => 'Switzerland',
            'passportcover' 	 => '/storage/photo/passportcover/ch.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 12
        DB::table('countries')->insert([
            'name'       => 'Japan',
            'passportcover' 	 => '/storage/photo/passportcover/jp.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 13
        DB::table('countries')->insert([
            'name'       => 'South Korea',
            'passportcover' 	 => '/storage/photo/passportcover/kr.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 14
        DB::table('countries')->insert([
            'name'       => 'Ireland',
            'passportcover' 	 => '/storage/photo/passportcover/ie.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 15
        DB::table('countries')->insert([
            'name'       => 'United States of America',
            'passportcover' 	 => '/storage/photo/passportcover/us.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 16
        DB::table('countries')->insert([
            'name'       => 'Myanmar',
            'passportcover' 	 => '/storage/photo/passportcover/mm.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        
    }
}
