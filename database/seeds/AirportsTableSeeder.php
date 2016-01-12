<?php

use Illuminate\Database\Seeder;

use App\Airport;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->delete();

        $airportsJson = File::get(storage_path(). "/jsondata/airports.json");
        $airports = json_decode($airportsJson);
        foreach ($airports as $airport) {
            Airport::create(array(
               'name' => $airport->name,
                'country' => $airport->iso,
                'code' => $airport->iata
            ));
        }
    }
}
