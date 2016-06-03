<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bin extends Model
{
    protected $fillable = [
        'lat',
        'lng',
        'bin_id',
        'time',
        'data'
    ];
}
