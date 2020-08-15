<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'type',
    ];

    public function publication()
    {
        return $this->hasMany(Publication::class);
    }
}
