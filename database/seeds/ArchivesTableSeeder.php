<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArchivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert banyak data
        $data = [
            ['archives_name'=>'STNK B 1234 RC'],
            ['archives_name'=>'STNK B 5628 RC'],
            ['archives_name'=>'STNK B 8290 RC'],            
        ];

        foreach($data as $d){
            DB::table('archives')->insert([
                'archives_name' => $d['archives_name']
            ]);
        }
    }
}
