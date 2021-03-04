<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = ['title', 'slug', 'description', 'available', 'cover', 'price', 'author', 'artist'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // relazione con artists M-T-M
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    // relazione con authors M-T-M
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
