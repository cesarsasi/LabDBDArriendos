<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'score', 'date', 'comment',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
}
