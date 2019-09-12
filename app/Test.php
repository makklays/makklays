<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // название таблицы
    protected $table = 'tests';

    // created_at и updated_at
    public $timestamps = false;

    protected $fillable = [
        'choice', 'ip', 'strana', 'city', 'region',
        'strana_rus', 'city_rus', 'region_rus', 'zip_code', 'strana_code', 'time_zone',
        'lat', 'lon',
        'email', 'message', 'created_at',
    ];
}
