<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'paymentMethod', 'card', 'startdate', 'finishdate', 'deadline',
    ];
    
    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function publication()
    {
        return $this->hasOne(Publication::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
