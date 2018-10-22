<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeInventoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 12; $i++) {
            $position = $i + 1;
            DB::table('employee_inventori')->insert([
            'employee_id'       => $faker->numberBetween($min = 1, $max = 12),
            'inventori_id'      => $faker->numberBetween($min = 1, $max = 3),
            'description'       => $faker->text
            ]);        
        }
    }
}
