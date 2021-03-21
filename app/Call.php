<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    // название таблицы
    protected $table = 'call';

    // created_at и updated_at
    public $timestamps = false;

    protected $fillable = [
        'fio', 'phone', 'want_development', 'messenger', 'lang', 'created_at',
    ];
}
