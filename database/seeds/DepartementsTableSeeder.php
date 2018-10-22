<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
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
            ['departement_name'=>'Finance'],
            ['departement_name'=>'IT Enginering'],
            ['departement_name'=>'Administration'],            
        ];

        foreach($data as $d){
            DB::table('departements')->insert([
                'departement_name' => $d['departement_name']
            ]);
        }
    }
}
