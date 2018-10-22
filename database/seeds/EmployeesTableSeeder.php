<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
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
            DB::table('employees')->insert([
            'identity_number'   => $faker->uuid,
            'employee_name'     => $faker->name,
            'address'           => $faker->address,
            'email'            => $faker->safeEmail,
            'phone'             => $faker->randomDigit,
            'picture'           => 'null',
            'position_id'       => $position,
            ]);        
        }
    }
}
