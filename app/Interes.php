<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interes extends Model
{
    protected $fillable = [
        'id', 'user_id', 'event_id', 'option',
    ];

    protected $table = 'interest';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
