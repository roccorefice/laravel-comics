<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = ['title', 'slug', 'description', 'available', 'cover', 'price', 'author'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
