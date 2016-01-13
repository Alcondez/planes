<?php

namespace App\Http\Controllers;

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

        return view('pages.flights', compact('pass_amt'));
    }

    public function registerPassengers()
    {
        $pass_amt = $_GET['pass_amt'];

        return view('pages.passengers', compact('pass_amt'));
    }
}
