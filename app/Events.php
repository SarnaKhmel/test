<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
      'name', 'subscribe', 'date',
    ];

    protected $table = 'events';

    public function users ()
    {
        return $this->hasMany(
            User::class(),
            'id',
            'name',
            'email',
            'provider'
        );


    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
