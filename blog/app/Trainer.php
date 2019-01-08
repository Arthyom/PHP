<?php

namespace laraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'avatar'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
