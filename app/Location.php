<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'region', 'commune', 'street',
    ];

    public function publication()
    {
        return $this->hasMany(Publication::class);
    }
}
