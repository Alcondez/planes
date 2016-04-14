<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function search()
    {
        return view('pages.search');
    }

    public function searchFlights(Request $request)
    {
        $pass_amt = $request->input('pass_amt');



        $flights = Flight::where('departure', $request->input('departure'))
                            ->where('destination', $request->input('arrival'))
                            ->where('departure_date', $request->input('date_from'))
                            ->get();
        $from = $request->input('departure');
        $to = $request->input('arrival');

        return view('pages.flights', compact('flights','to','from', 'pass_amt'));

        //return dd($request->all());
    }

    public function registerPassengers()
    {
        $pass_amt = $_GET['pass_amt'];

        return view('pages.passengers', compact('pass_amt'));
    }
}
