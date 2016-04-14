<?php

use Illuminate\Database\Seeder;

use App\Country;


class CountriesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $countriesJson = File::get(storage_path(). "/jsondata/countries.json");
        $countries = json_decode($countriesJson, true);
        foreach ($countries as $country) {
            Country::create(array(
                'name' => $country->common,
                'code' => $country->cca2
            ));
        }
    }
}
