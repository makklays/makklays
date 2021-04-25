<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // название таблицы
    protected $table = 'articles';

    // created_at и updated_at
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'tile', 'slag', 'lang', 'short_text', 'full_text', 'photo', 'is_visible', 'views', 'created_at',
    ];
}
