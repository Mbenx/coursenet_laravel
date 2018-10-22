<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // default laravel dengan random
        // DB::table('locations')->insert([
        //     'location_name' => str_random(10),
        //     'description' => str_random(10),
        // ]);

        // data manual sample satu data
        // DB::table('locations')->insert([
        //     'location_name' => 'Jakarta',
        //     'description' => 'Spesial Pakai telor',
        // ]);

        // insert banyak data
        // $dataBarang = [
        //     ['noAset'=>'2017/meja/02','name'=> 'Meja Makan',
        //     'description'=>'Meja Makan',],
        //     ['noAset'=>'2017/meja/03','name'=> 'Meja Kerja',
        //     'description'=>'Meja Kerja karyawan',],
        //     ['noAset'=>'2017/meja/04','name'=> 'Meja TV',
        //     'description'=>'Meja TV ruang utama',]
        // ];

        // foreach($dataBarang as $data){
        //     DB::table('Asets')->insert([
        //         'noAset'        => $data['noAset'],
        //         'name'          => $data['name'],
        //         'description'   => $data['description']
        //     ]);
        // }


        // insert random data

        $faker = Faker::create();
        for ($i=0; $i < 15; $i++) { 

            DB::table('locations')->insert([
            'location_name' => $faker->city,
            'description'   => $faker->text
            ]);
        
        }
    }
}