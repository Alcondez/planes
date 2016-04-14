<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    public $timestamps = true;

    protected $fillable = [
        'departure',
        'destination',
        'departure_date',
        'first_class',
        'second_class'
    ];
}
