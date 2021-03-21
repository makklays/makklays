<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // название таблицы
    protected $table = 'feedback';

    // created_at и updated_at
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'message', 'created_at',
    ];
}
