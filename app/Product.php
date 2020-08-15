<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'availability',
    ];

    public function publication()
    {
        return $this->hasOne(Publication::class);
    }
}
