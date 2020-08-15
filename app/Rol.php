<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'type',
    ];

    public function rolUser()
    {
        return $this->hasMany(RolUser::class);
    }
}
