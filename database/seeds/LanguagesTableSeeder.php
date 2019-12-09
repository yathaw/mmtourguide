<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('languages')->insert([
            'name'       => 'Myanmar',
            'flag' 	 => '/storage/photo/globalflag/myanmar.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 2
        DB::table('languages')->insert([
            'name'       => 'Chinese',
            'flag' 	 => '/storage/photo/globalflag/china.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 3
        DB::table('languages')->insert([
            'name'       => 'English',
            'flag' 	 => '/storage/photo/globalflag/us.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 4
        DB::table('languages')->insert([
            'name'       => 'British',
            'flag' 	 => '/storage/photo/globalflag/britain.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 5
        DB::table('languages')->insert([
            'name'       => 'Spain',
            'flag' 	 => '/storage/photo/globalflag/spain.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 6
        DB::table('languages')->insert([
            'name'       => 'Japan',
            'flag' 	 => '/storage/photo/globalflag/japan.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 7
        DB::table('languages')->insert([
            'name'       => 'Korea',
            'flag' 	 => '/storage/photo/globalflag/korea.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 8
        DB::table('languages')->insert([
            'name'       => 'French',
            'flag' 	 => '/storage/photo/globalflag/france.png',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 9
        // DB::table('languages')->insert([
        //     'name'       => 'Vietnamese',
        //     'flag' 	 => '/storage/photo/globalflag/vietnam.png',
        //     'created_at' => now(),
	       //  'updated_at' => now()
        // ]);
    }
}
