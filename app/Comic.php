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

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
