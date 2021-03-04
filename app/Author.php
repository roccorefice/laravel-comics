<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
