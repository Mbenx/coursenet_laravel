<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['position_name'=>'General Manager Finance','departement_id'=>'1'],
            ['position_name'=>'Manager Finance','departement_id'=>'1'],
            ['position_name'=>'Supervisor Finance','departement_id'=>'1'],
            ['position_name'=>'Staf Finance','departement_id'=>'1'],
            ['position_name'=>'General Manager IT Enginering','departement_id'=>'2'],
            ['position_name'=>'Manager IT Enginering','departement_id'=>'2'],
            ['position_name'=>'Supervisor IT Enginering','departement_id'=>'2'],
            ['position_name'=>'Staf IT Enginering','departement_id'=>'2'],
            ['position_name'=>'General Manager Administration','departement_id'=>'3'],
            ['position_name'=>'Manager Administration','departement_id'=>'3'],
            ['position_name'=>'Supervisor Administration','departement_id'=>'3'],
            ['position_name'=>'Staf Administration','departement_id'=>'3'],            
        ];

        foreach($data as $d){
            DB::table('positions')->insert([
                'position_name' => $d['position_name'],
                'departement_id'=>$d['departement_id']
            ]);
        }
    }
}
