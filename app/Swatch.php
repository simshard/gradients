<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swatch extends Model
{
    //protected $guarded = [];

    protected $fillable = [
        'owner_id',
        'title',
        'gradient',
        'colorvals',
        'direction'
        ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
