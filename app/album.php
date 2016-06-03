<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    public $fillable=['songName','artistName','rating','picName'];
}
