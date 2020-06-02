<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';
    
    Public function create()
    {
        return  $this->hasOne(Auth::class);
    }
}