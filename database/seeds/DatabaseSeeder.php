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
        // $this->call(UserTableSeeder::class);
        //$this->call('CountriesTableSedder');

        //Model::unguard();

        $this->call('Alakkad\WorldCountriesCities\CitiesSeeder');
        $this->call('Alakkad\WorldCountriesCities\CountriesSeeder');
        $this->call('FlightsSeeder');
    }
}
