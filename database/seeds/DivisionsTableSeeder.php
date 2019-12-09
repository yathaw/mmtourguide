<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1
        DB::table('divisions')->insert([
            'name'       => 'Kachin State',
            'flag'		 => '/storage/photo/localflag/kachin.png',
            'capital' 	 => 'Myitkyina',
            'region' 	 => 'North',
            'type' 		 => 'State',
            'description'=> '',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 2
        DB::table('divisions')->insert([
            'name'       => 'Kayah State',
            'flag'		 => '/storage/photo/localflag/kayah.png',
            'capital' 	 => 'Loikaw',
            'region' 	 => 'East',
            'type' 		 => 'State',
            'description'=> '',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 3
        DB::table('divisions')->insert([
            'name'       => 'Kayin State',
            'flag'		 => '/storage/photo/localflag/kayin.png',
            'capital' 	 => 'Pa-an',
            'region' 	 => 'South',
            'type' 		 => 'State',
            'description'=> '',
            'created_at' => now(),
	        'updated_at' => now()
        ]);

        // 4
        DB::table('divisions')->insert([
            'name'       => 'Chin State',
            'flag'       => '/storage/photo/localflag/chin.png',
            'capital'    => 'Hakha',
            'region'     => 'West',
            'type'       => 'State',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 5
        DB::table('divisions')->insert([
            'name'       => 'Mon State',
            'flag'       => '/storage/photo/localflag/mon.png',
            'capital'    => 'Mawlamyine',
            'region'     => 'South',
            'type'       => 'State',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 6
        DB::table('divisions')->insert([
            'name'       => 'Rakhine State',
            'flag'       => '/storage/photo/localflag/rakhine.png',
            'capital'    => 'Sittwe',
            'region'     => 'West',
            'type'       => 'State',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 7
        DB::table('divisions')->insert([
            'name'       => 'Shan State',
            'flag'       => '/storage/photo/localflag/shan.png',
            'capital'    => 'Taunggyi',
            'region'     => 'East',
            'type'       => 'State',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 8
        DB::table('divisions')->insert([
            'name'       => 'Ayeyarwady Region',
            'flag'       => '/storage/photo/localflag/ayeyarwady.png',
            'capital'    => 'Pathein',
            'region'     => 'Lower',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 9
        DB::table('divisions')->insert([
            'name'       => 'Bago Region',
            'flag'       => '/storage/photo/localflag/bago.png',
            'capital'    => 'Bago',
            'region'     => 'Lower',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 10
        DB::table('divisions')->insert([
            'name'       => 'Magway Region',
            'flag'       => '/storage/photo/localflag/magway.png',
            'capital'    => 'Magwe',
            'region'     => 'Central',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 11
        DB::table('divisions')->insert([
            'name'       => 'Mandalay Region',
            'flag'       => '/storage/photo/localflag/mandalay.png',
            'capital'    => 'Mandalay',
            'region'     => 'Central',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 12
        DB::table('divisions')->insert([
            'name'       => 'Sagaing Region',
            'flag'       => '/storage/photo/localflag/sagaing.png',
            'capital'    => 'Sagaing',
            'region'     => 'North',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 13
        DB::table('divisions')->insert([
            'name'       => 'Tanintharyi Region',
            'flag'       => '/storage/photo/localflag/tanintharyi.png',
            'capital'    => 'Dawei',
            'region'     => 'South',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 14
        DB::table('divisions')->insert([
            'name'       => 'Yangon Region',
            'flag'       => '/storage/photo/localflag/yangon.png',
            'capital'    => 'Yangon',
            'region'     => 'Lower',
            'type'       => 'Region',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 15
        DB::table('divisions')->insert([
            'name'       => 'Naypyidaw Union Territory',
            'flag'       => '/storage/photo/localflag/NayPyiTaw_Council.jpg',
            'capital'    => 'Naypyidaw',
            'region'     => 'Central',
            'type'       => 'Union Territory',
            'description'=> '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
