<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

use App\Flight;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->delete();

        $cities = Config::get('cities');
        $cities2 = Config::get('cities');
        //$cities = json_decode($citiesData, true);
        //$cities2 = json_decode($citiesData2, true);
        shuffle($cities2);
        $i = 0;
        foreach ($cities as $city) {
            $date = Carbon::create(2016, 1, 1, 0, 0, 0);



            Flight::create(array(
                'departure' => $city['name'],
                'destination' => $cities2[$i]['name'],
                'departure_date' => $date->addWeeks(rand(1, 52))->format('Y-m-d'),
                'first_class' => $this->random(200.0, 500.0),
                'second_class' => $this->random(50.0, 200.0)

            ));
            if(++$i > 500) break;
        }
    }


    function count_decimals($x){
        return  strlen(substr(strrchr($x+"", "."), 1));
    }

    public function random($min, $max){
        $decimals = max($this->count_decimals($min), $this->count_decimals($max));
        $factor = pow(10, $decimals);
        return rand($min*$factor, $max*$factor) / $factor;
    }
}
