<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airports';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'country',
        'code'
    ];
}
