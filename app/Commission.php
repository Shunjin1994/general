<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    //変更したいもの
    protected $fillable = [ 'title', 'price', 'details', 'category_id', 'conditions', 'rank', 'supplement', 'delivery_date' ];
}

