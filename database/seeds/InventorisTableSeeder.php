<?php

use Illuminate\Database\Seeder;

class InventorisTableSeeder extends Seeder
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
            ['inventori_name'=>'Mobil Toyota Fortuner Biru', 'archive_id'=>'1'],
            ['inventori_name'=>'Mobil Honda Jazz Merah','archive_id'=>'2'],
            ['inventori_name'=>'Mobil Honda Jazz Kuning','archive_id'=>'3'],            
        ];

        foreach($data as $d){
            DB::table('inventoris')->insert([
                'inventori_name'    => $d['inventori_name'],
                'archive_id'        => $d['archive_id']
            ]);
        }
    }
}
