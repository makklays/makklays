<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    // название таблицы
    protected $table = 'blacklist';

    // created_at и updated_at
    public $timestamps = false;

    protected $fillable = [
        'ip', 'created_at',
    ];
}
