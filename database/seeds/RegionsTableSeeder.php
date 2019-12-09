<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1 Kachin State
	        // 1
	        DB::table('regions')->insert([
	            'name'       => 'Bhamo',
	            'division_id'=> 1,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 2
	        DB::table('regions')->insert([
	            'name'       => 'Mohnyin',
	            'division_id'=> 1,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 3
	        DB::table('regions')->insert([
	            'name'       => 'Myitkyina',
	            'division_id'=> 1,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 4
	        DB::table('regions')->insert([
	            'name'       => 'Putao',
	            'division_id'=> 1,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 2 Kayah State
	        // 5
	        DB::table('regions')->insert([
	            'name'       => 'Bawlakhe',
	            'division_id'=> 2,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 6
	        DB::table('regions')->insert([
	            'name'       => 'Loikaw',
	            'division_id'=> 2,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 3 Kayin State

	        // 7
	        DB::table('regions')->insert([
	            'name'       => 'Hpa-an',
	            'division_id'=> 3,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 8
	        DB::table('regions')->insert([
	            'name'       => 'Hpapun',
	            'division_id'=> 3,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 9
	        DB::table('regions')->insert([
	            'name'       => 'Kawkareik',
	            'division_id'=> 3,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 10
	        DB::table('regions')->insert([
	            'name'       => 'Myawaddy',
	            'division_id'=> 3,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 4 Chin State

	        // 11
	        DB::table('regions')->insert([
	            'name'       => 'Falam',
	            'division_id'=> 4,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 12
	        DB::table('regions')->insert([
	            'name'       => 'Hakha',
	            'division_id'=> 4,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 13
	        DB::table('regions')->insert([
	            'name'       => 'Matup',
	            'division_id'=> 4,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 14
	        DB::table('regions')->insert([
	            'name'       => 'Mindat',
	            'division_id'=> 4,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 5 Mon State

	        // 15
	        DB::table('regions')->insert([
	            'name'       => 'Mawlamyine',
	            'division_id'=> 5,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 16
	        DB::table('regions')->insert([
	            'name'       => 'Thaton',
	            'division_id'=> 5,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 6 Rakhine State
	        // 17
	        DB::table('regions')->insert([
	            'name'       => 'Kyaukpyu',
	            'division_id'=> 6,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 18
	        DB::table('regions')->insert([
	            'name'       => 'Maungdaw',
	            'division_id'=> 6,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 19
	        DB::table('regions')->insert([
	            'name'       => 'Sittwe',
	            'division_id'=> 6,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 20
	        DB::table('regions')->insert([
	            'name'       => 'Thandwe',
	            'division_id'=> 6,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 21
	        DB::table('regions')->insert([
	            'name'       => 'Mrauk-U',
	            'division_id'=> 6,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------
	    
	    // 7 Shan State

	        // 22
	        DB::table('regions')->insert([
	            'name'       => 'Kengtung',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 23
	        DB::table('regions')->insert([
	            'name'       => 'Mong Hpayak',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 24
	        DB::table('regions')->insert([
	            'name'       => 'Mong Hsat',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 25
	        DB::table('regions')->insert([
	            'name'       => 'Tachileik',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 26
	        DB::table('regions')->insert([
	            'name'       => 'Kunlong',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 27
	        DB::table('regions')->insert([
	            'name'       => 'Kyaukme',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 28
	        DB::table('regions')->insert([
	            'name'       => 'Lashio',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 29
	        DB::table('regions')->insert([
	            'name'       => 'Laukkaing',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 30
	        DB::table('regions')->insert([
	            'name'       => 'Mu Se',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 31
	        DB::table('regions')->insert([
	            'name'       => 'Hopang',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 32
	        DB::table('regions')->insert([
	            'name'       => 'Matman',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 33
	        DB::table('regions')->insert([
	            'name'       => 'Mongmit',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 34
	        DB::table('regions')->insert([
	            'name'       => 'Kokang Self-Administered Zone',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 35
	        DB::table('regions')->insert([
	            'name'       => 'Pa Laung Self-Administered Zone',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 36
	        DB::table('regions')->insert([
	            'name'       => 'Wa Self-Administered Division',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 37
	        DB::table('regions')->insert([
	            'name'       => 'Langkho',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 38
	        DB::table('regions')->insert([
	            'name'       => 'Loilen',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 39
	        DB::table('regions')->insert([
	            'name'       => 'Taunggyi',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 40
	        DB::table('regions')->insert([
	            'name'       => 'Danu Self-Administered Zone',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 41
	        DB::table('regions')->insert([
	            'name'       => 'Pa-O Self-Administered Zone',
	            'division_id'=> 7,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]); 
	    // -----------------------------

	    // 8 Ayeyarwady Region
	        // 42
	        DB::table('regions')->insert([
	            'name'       => 'Hinthada',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 43
	        DB::table('regions')->insert([
	            'name'       => 'Labutta',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 44
	        DB::table('regions')->insert([
	            'name'       => 'Ma-ubin',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 45
	        DB::table('regions')->insert([
	            'name'       => 'Myaungmya',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 46
	        DB::table('regions')->insert([
	            'name'       => 'Pathein',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 47
	        DB::table('regions')->insert([
	            'name'       => 'Pyapon',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 48
	        DB::table('regions')->insert([
	            'name'       => 'Kyonpyaw',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 49
	        DB::table('regions')->insert([
	            'name'       => 'Myanaung',
	            'division_id'=> 8,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 9 Bago Region
	        // 50
	        DB::table('regions')->insert([
	            'name'       => 'Bago',
	            'division_id'=> 9,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 51
	        DB::table('regions')->insert([
	            'name'       => 'Taungoo',
	            'division_id'=> 9,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 52
	        DB::table('regions')->insert([
	            'name'       => 'Pyay',
	            'division_id'=> 9,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 53
	        DB::table('regions')->insert([
	            'name'       => 'Tharrawaddy',
	            'division_id'=> 9,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------
	    
	    // 10 Magway Region

	        // 54
	        DB::table('regions')->insert([
	            'name'       => 'Gangaw',
	            'division_id'=> 10,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 55
	        DB::table('regions')->insert([
	            'name'       => 'Magway',
	            'division_id'=> 10,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 56
	        DB::table('regions')->insert([
	            'name'       => 'Minbu',
	            'division_id'=> 10,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 57
	        DB::table('regions')->insert([
	            'name'       => 'Pakokku',
	            'division_id'=> 10,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 58
	        DB::table('regions')->insert([
	            'name'       => 'Thayet',
	            'division_id'=> 10,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------
	        
	    // 11 Mandalay Region
	        // 59
	        DB::table('regions')->insert([
	            'name'       => 'Kyaukse',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 60
	        DB::table('regions')->insert([
	            'name'       => 'Mandalay',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 61
	        DB::table('regions')->insert([
	            'name'       => 'Meiktila',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 62
	        DB::table('regions')->insert([
	            'name'       => 'Myingyan',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 63
	        DB::table('regions')->insert([
	            'name'       => 'Nyaung-U',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 64
	        DB::table('regions')->insert([
	            'name'       => 'Pyinoolwin',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 65
	        DB::table('regions')->insert([
	            'name'       => 'Yamethin',
	            'division_id'=> 11,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 12 Sagaing Region
	        // 66
	        DB::table('regions')->insert([
	            'name'       => 'Hkamti',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 67
	        DB::table('regions')->insert([
	            'name'       => 'Kanbalu',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 68
	        DB::table('regions')->insert([
	            'name'       => 'Kale',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 69
	        DB::table('regions')->insert([
	            'name'       => 'Katha',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 70
	        DB::table('regions')->insert([
	            'name'       => 'Mawlaik',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 71
	        DB::table('regions')->insert([
	            'name'       => 'Monywa',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 72
	        DB::table('regions')->insert([
	            'name'       => 'Sagaing',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 73
	        DB::table('regions')->insert([
	            'name'       => 'Shwebo',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 74
	        DB::table('regions')->insert([
	            'name'       => 'Tamu',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 75
	        DB::table('regions')->insert([
	            'name'       => 'Yinmabin',
	            'division_id'=> 12,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 13 Tanintharyi Region
	        // 76
	        DB::table('regions')->insert([
	            'name'       => 'Dawei',
	            'division_id'=> 13,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 77
	        DB::table('regions')->insert([
	            'name'       => 'Kawthaung',
	            'division_id'=> 13,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);

	        // 78
	        DB::table('regions')->insert([
	            'name'       => 'Myeik',
	            'division_id'=> 13,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 14 Yangon Region

	        // 79
	        DB::table('regions')->insert([
	            'name'       => 'Yangon',
	            'division_id'=> 14,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);
	    // -----------------------------

	    // 15 Naypyidaw Union Territory
	        // 80
	        DB::table('regions')->insert([
	            'name'       => 'Nay Pyi Daw',
	            'division_id'=> 15,
	            'created_at' => now(),
		        'updated_at' => now()
	        ]);




    }
}
