<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArchivesTableSeeder::class);
        $this->call(InventorisTableSeeder::class);
        $this->call(DepartementsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(EmployeeInventoriTableSeeder::class);
    }
}
